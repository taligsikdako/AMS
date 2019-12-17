<?php

class Site_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    function can_login()
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);

         $result = $this->db->get('users');
        if($result->num_rows() === 1) {
          return $result->row();
    }   else {
        return false;
    }    
    }

}
?>