<?php

class Kritiksaranlog extends CI_Controller
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
        $this->form_validation->set_rules('kritiksaran', 'Kritiksaran', 'required');

        if ($this->form_validation->run() == false) {
            $data['users'] =  $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

            $this->load->view('kritiksaran/kritiksaranlog', $data);
        } else {
            $data = [

                'kritiksaran' => $this->input->post('kritiksaran', true)
            ];

            $this->db->insert('kritiksaran', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Terima Kasih!
          </div>');
            redirect('kritiksaranlog');
        }
    }
}
