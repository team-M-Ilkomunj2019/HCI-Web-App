<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Favorit extends CI_Controller
{

    public function katafavorit($kata)
    {

        switch ($kata) {
            case 'DarkJoke':
                $id = $this->session->userdata('id');
                $data = [
                    'id' => $id,
                    'katafavorit' => $kata

                ];
                $this->db->insert('favorit', $data);
                $this->session->set_flashdata('oke', '<script> alert("Berhasil ditambahkan !") </script>');
                redirect('Darkjokelog');
                break;
            default:
                break;
        }
    }
}

/* End of file Controllername.php */
