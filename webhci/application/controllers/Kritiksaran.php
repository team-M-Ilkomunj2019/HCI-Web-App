<?php

class Kritiksaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('kritiksaran', 'Kritiksaran', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('kritiksaran/index');
        } else {
            $data = [

                'kritiksaran' => $this->input->post('kritiksaran', true)
            ];

            $this->db->insert('kritiksaran', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Terima Kasih!
          </div>');
            redirect('kritiksaran');
        }
    }
}
