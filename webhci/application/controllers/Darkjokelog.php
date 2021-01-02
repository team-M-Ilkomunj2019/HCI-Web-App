<?php

class Darkjokelog extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model('favorit');
        if ($this->session->userdata('role_id') == NULL) {


            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Anda belum login!
              </div>');
            redirect('auth');
        }
    }

    public function index()
    {
        $id = $this->session->userdata('id');
        $data['dira'] = $this->favorit->favoritsaya($id);
        $data['users'] =  $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('darkjokelog/index', $data);
    }
}
