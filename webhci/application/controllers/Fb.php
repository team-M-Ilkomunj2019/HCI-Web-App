<?php

class Fb extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }


    public function index()
    {

        $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[users.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]');
        if ($this->form_validation->run() == false) {


            $data['judul'] = 'Daftar dengan Facebook';
            $this->load->view('templates/header', $data);
            $this->load->view('fb/index');
            $this->load->view('templates/footer');
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
}
