<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model
{
    var $user_table = 'users';
    function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }

    public function can_login($username,$password)
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

    function update_user($updatedata,$id)
    {
        $this->db->where('id',$id);
        $this->db->update('users',$updatedata);
    }

    function fetch_user($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get('users');
        return $query;
    }

    function update_password($username,$password)
    {
        $data = array(
            'password' => md5($password)
        );
        $this->db->where('username',$username);
        $this->db->update($this->user_table,$data);
    }

    function check_username_exists($username)
    {
         $query = $this->db->get_where('users',array('username'=> $username));
         if(empty($query->row_array())){
             return true;
         } else {
             return false;
         }
     }
     function check_email_exists($email)
     {
          $query = $this->db->get_where('users',array('user_email'=> $email));
          if(empty($query->row_array())){
              return true;
          } else {
              return false;
          }
      }


     function get_usergroup() // Fetch created user groups
     {
         // $this->db->order_by('UserRoles');
         $query = $this->db->get('user_group');
         return $query->result_array();
     } 
}