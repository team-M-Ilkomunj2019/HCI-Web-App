<?php

defined('BASEPATH') or exit('No direct script access allowed');

class favorit extends CI_Model
{
    public function favoritsaya($id)
    {
        return $this->db->get_where('favorit', ['id' => $id])->row_array();
    }
}

/* End of file favorit.php */
