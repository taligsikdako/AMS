<?php 

class User extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->helper('url');
        $this->load->model->('user_model');
    }

    public function index()
    {
        //load session library
        $this->load->library('session');

        //restricting users to go back to login if session has been set
        if($this->session->userdata('user'))
        {
            redirect('home');
        }
        else
        {
            $this->load->view('login_page');
        }
    }

    function login()
    {
        $this->load->library('session');

        $user_name = $this->input->post('user_name');
        $user_password = $this->input->post('user_password');

        $data_users = $this->user_model->login($user_name,$user_password);

        if($data_users)
        {
            $this->session->set_userdata('user',$users);
        }
    }

   

    function dashboard()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/about');
        $this->load->view('templates/footer');
    }
}