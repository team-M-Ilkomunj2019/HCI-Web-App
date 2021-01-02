<?php

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('homelogin');
        }
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {

            $this->load->view('auth/login');
        } else {
            // validasinya lolos
            $this->_login();
        }
    }


    public function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('users', ['email' => $email])->row_array();


        if ($user) {
            // usernya ada
            // cek password

            if (password_verify($password, $user['password'])) {

                $data =  ['role_id' => $user['role_id'], 'email' => $user['email'], 'id' => $user['id']];
                $this->session->set_userdata($data);
              

                redirect('homelogin');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Gagal Login! Password Salah!
              </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Gagal Login! Email Belum Terdaftar!
          </div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        if ($this->session->userdata('email')) {
            redirect('homelogin');
        }

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]');
        if ($this->form_validation->run() == false) {

            $this->load->view('auth/registration');
        } else {
            $data = [
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'image' => 'default.jpg',
                'role_id' => 2,
                'date_created' => time()
            ];

            $this->db->insert('users', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat Anda Berhasil Bergabung! Silahkan Login!
          </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
    }
}
