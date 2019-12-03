
<?php


class Site extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->helper('url');
        
    }
 
    function login_validation()
    {
       $this->form_validation->set_rules('username','username','required');
       $this->form_validation->set_rules('password','user password','required');

       if($this->form_validation->run())
       {
        // die('login success');
        //Get Login credentials username & password
        $username = $this->input->post('username');
        $password = md5($this->input->post('username'));

        $user_id = $this->user_model->login($username,$password);
        if($user_id) {
            $user_data = array (
              'id' => $user_id->id, 
              'username' => $username,
              'user_group' => $user_group,
              'user_status' => $user_status,
              'user_email' => $user_email,
              'logged_in' => true
            );
        }
        
       } 
       else
       {
        // $data['title'] = ucfirst($page); // Capitalize the first letter
        $data['title']   = ucfirst('IT Assets & Management');
        $this->load->view('templates/login_header', $data);
        $this->load->view('pages/login', $data);
        $this->load->view('templates/login_footer', $data);
       }
    }

}