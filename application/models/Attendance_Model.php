<?php

class Attendance_Model extends CI_Model
{
    function employee_loggedin()
    {
   
        $data = array(
            'username' => $this->session->userdata('username'),
            'shift' => $this->input->post('select_shift')  
        );
        return $this->db->insert('att_logs',$data);
    }

   
}
?>