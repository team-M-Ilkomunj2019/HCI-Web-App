<?php

class Openminded extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Open-minded';
        $this->load->view('templates/header', $data);
        $this->load->view('openminded/index');
        $this->load->view('templates/footer');
    }
}