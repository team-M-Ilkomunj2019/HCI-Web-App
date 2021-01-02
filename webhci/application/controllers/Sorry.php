<?php

class Sorry extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Login Yuk!';
        $this->load->view('templates/header', $data);
        $this->load->view('sorry/index');
        $this->load->view('templates/footer');
    }
}
