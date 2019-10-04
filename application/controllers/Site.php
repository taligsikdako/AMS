<?php

class Site extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'IT Asset Management System | Login';
        // $this->load->view('template/landing_page/header',$data);
        // $this->load->view('template/landing_page/nav');
        // $this->load->view('user/landing_page/index');
        // $this->load->view('template/landing_page/footer');

        $this->load->view('template/landing_page/header',$data);     
        $this->load->view('user/login/index');
        $this->load->view('template/landing_page/footer');

    }

    public function login()
    {
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('password','password','required');
    }

}