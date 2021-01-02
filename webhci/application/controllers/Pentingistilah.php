<?php

class Pentingistilah extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Pentingnya Memahami Istilah di Media Sosial';
        $this->load->view('templates/header', $data);
        $this->load->view('pentingistilah/index');
        $this->load->view('templates/footer');
    }
}
