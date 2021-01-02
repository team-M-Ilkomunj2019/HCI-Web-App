<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Search extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('role_id') == NULL) {

            redirect('sorry');
        }
    }

    public function searching()
    {
        if (isset($_POST['cari'])) {
            $cari = $_POST['cari'];
            strtoupper($cari);

            if ($cari == 'toxic') {
                redirect('toxiclog');
            } else if ($cari == 'sjw') {
                redirect('Sjwlog');
            } else if ($cari == 'salty') {
                redirect('Saltylog');
            } else if ($cari == 'darkjoke' || $cari == 'dark joke') {
                redirect('Darkjokelog');
            } else if ($cari == 'openminded' || $cari == 'open minded') {
                redirect('Openmindedlog');
            } else if ($cari == 'cmiiw') {
                redirect('Cmiiwlog');
            } else if ($cari == 'iykwim') {
                redirect('Iykwimlog');
            } else if ($cari == 'fyi') {
                redirect('Fyilog');
            } else {
                $this->session->set_flashdata('kiw', '<script> alert("Data tidak Ditemukan !")</script>');
                redirect('homelogin');
            }
        }
    }
}
