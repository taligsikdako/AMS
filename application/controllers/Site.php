<?php

class Site extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
       
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('user_model');
       
    }

    public function index()
    {
        $data['title'] = 'IT Asset Management System | Login';
     
        $this->load->view('template/landing_page/header',$data);     
        $this->load->view('user/frmlogin');
        $this->load->view('template/landing_page/footer');
        // $this->load->view('template/login_page/sample');

    }

    public function login()
    {
        // $this->load->helper('array');
        $data['title'] = 'IT Asset Management System | Login';
        $this->form_validation->set_rules('tUName','username','required');
        $this->form_validation->set_rules('tPassword','password','required');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('template/landing_page/header',$data);     
            $this->load->view('user/frmlogin');
            $this->load->view('template/landing_page/footer');
        }
        else
        {
            //Database connection
            $username = $this->input->post('user_name');
            $password = md5($this->input->post('user_password'));

            //Login User
            $users_account = $this->user_model->login($username,$password);

            //Session
            if($users_account)
            {
                $user_data = array(
                    'id' => $users_account->uid,
                    'username' => $username,
                    'password' => $password,
                    'logged_in' => true
                );
                
                $this->session->set_userdata($user_data);
                // $this->session->set_flashdata('user_loggedin','Welcome, ');
                redirect(base_url() . 'site/user/dashboard');
                die('Success');
            }
            else
            {
                // $this->session->set_flashdata('failed_login','Login is Invalid');
                // redirect(base_url() . 'site');
                die('Failed');
                
            }

        }
    }

    function dashboard()
    {
        die('Welcome to users dashboard');
    }

}