<?php

class Istilah extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Istilah';
        $this->load->view('templates/header', $data);
        $this->load->view('istilah/index');
        $this->load->view('templates/footer');
    }
}
