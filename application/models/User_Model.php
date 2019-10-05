<?php 

class User_Model extends CI_Model
{
    function login($username,$password)
    {
        $this->db->where('username','$username');
        $this->db->where('password',$password);
        
        $result = $this->db->get('tbl_users');
        if($result->num_rows() === 1)
        {
            return $result->row();
        }
        else
        {
            return false;
        }
    }
}