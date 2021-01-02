<?php

class Openminded2 extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Tentang Open-minded';
        $this->load->view('templates/header', $data);
        $this->load->view('openminded2/index');
        $this->load->view('templates/footer');
    }
}
