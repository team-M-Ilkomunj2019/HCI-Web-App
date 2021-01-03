<?php

class Kuesioner extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('kesatu', 'Kesatu', 'required');
        $this->form_validation->set_rules('kedua', 'Kedua', 'required');
        $this->form_validation->set_rules('ketiga', 'Ketiga', 'required');
        $this->form_validation->set_rules('keempat', 'Keempat', 'required');
        if ($this->form_validation->run() == false) {
            $data['users'] =  $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

            $this->load->view('kuesioner/index', $data);
        } else {
            $data = [

                'kesatu' => $this->input->post('kesatu', true),
                'kedua' => $this->input->post('kedua', true),
                'ketiga' => $this->input->post('ketiga', true),
                'keempat' => $this->input->post('keempat', true)
            ];

            $this->db->insert('kuesioner', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Terima Kasih!
          </div>');
            redirect('homelogin');
        }
    }
}
