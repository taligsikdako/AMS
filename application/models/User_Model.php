<?php 

class User_Model extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }

    public function login($username,$password)
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

    function new_registration()
    {
   
        $data = array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'fname' => ucfirst($this->input->post('firstName')),
            'lname' => ucfirst($this->input->post('lastName')),
            'user_email' => $this->input->post('Email'),
            'contactNumber' => $this->input->post('contactNumber'),
            // 'user_status' => $this->input->post('userStatus'),
            // 'user_group' => $this->input->post('userGroup'),
            'address' => ucwords($this->input->post('address'))          
        );
        return $this->db->insert('users',$data);
    }

    function getAllUsers()
    {
        $query = $this->db->get('users');
        return $query;
    }

    function update_user($data,$id)
    {
        $this->db->where('id',$id);
        $this->db->update('users',$data);
    }

    function fetch_user($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get('users');
        return $query;
    }
}