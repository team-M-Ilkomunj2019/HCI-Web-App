<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');

    }

    public function index()
    {
        $data['judul'] = 'Home';
        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }

    public function homelogin()
    {
        $data['judul'] = 'Home';
        $this->load->view('home/homelogin');
    }
}
