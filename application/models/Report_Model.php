<?php

class Report_model extends CI_Model
{
    function get_NumberOfUsers() //Number of registered users
    {
        $this->db->select('count(*) as no');
        $query = $this->db->get('users');
        return $query->result();
    }
    function get_NumberOfTrainee() //Number of registered users
    {
        $this->db->select('count(*) as no');
        $this->db->where('user_group','Trainee');
        $query = $this->db->get('users');
        return $query->result();
    }

    function fetchAllEmployeeLogs()
    {        
        $query = $this->db->get('att_logs');        
        return $query;
    }

    function fetchLoggedinByEmployee()
    {       
        // $this->db->where($this->session->userdata('username'));   
        $query = $this->db->get('att_logs');          
        return $query;
    }
}
?>