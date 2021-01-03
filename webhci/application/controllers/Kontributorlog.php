<?php

class Kontributorlog extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');

        if ($this->session->userdata('role_id') == NULL) {


            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Anda belum login!
              </div>');
            redirect('auth');
        }
    }


    public function index()
    {

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

        $this->form_validation->set_rules('new_term', 'New_term', 'required|trim');
        if ($this->form_validation->run() == false) {

            $data['users'] =  $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $data['judul'] = 'Jadilah Kontributor';

            $this->load->view('kontributor/kontributorlog', $data);
        } else {
            $data = [
                'email' => htmlspecialchars($this->input->post('email', true)),
                'new_term' => $this->input->post('new_term', true)

            ];

            $this->db->insert('kontributor', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Terima Kasih!
          </div>');
            redirect('Kontributorlog');
        }
    }
}
