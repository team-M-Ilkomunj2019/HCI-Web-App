<?php

class Kontributor extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

        $this->form_validation->set_rules('new_term', 'New_term', 'required|trim');
        if ($this->form_validation->run() == false) {

            $data['judul'] = 'Jadilah Kontributor';
            $this->load->view('templates/header', $data);
            $this->load->view('kontributor/index');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'email' => htmlspecialchars($this->input->post('email', true)),
                'new_term' => $this->input->post('new_term', true)

            ];

            $this->db->insert('kontributor', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Terima Kasih!
          </div>');
            redirect('Kontributor');
        }
    }
}
