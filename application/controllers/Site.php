
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