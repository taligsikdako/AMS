<?php 

class User extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->helper('url');
        $this->load->model('user_model');
        $this->load->library('form_validation');
	

        
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

   

    function registration()
    {
        // $data['title'] = ucfirst($page); // Capitalize the first letter
        $data['title']   = ucfirst('Registration Page');
        $data['header_title'] = "Attendance Monitoring System";
        $this->load->view('templates/header', $data);
        $this->load->view('pages/registration', $data);
        $this->load->view('templates/footer', $data);
    }

    function members_registration()
    {        
        // $this->form_validation->set_rules('username','username','required');       
        // $this->form_validation->set_rules('password','password','required');
        // $this->form_validation->set_rules('firstName','Name','required');
        // $this->form_validation->set_rules('lastName','Last Name','required');
        // $this->form_validation->set_rules('user_email', 'user email', 'required|valid_email');
        // $this->form_validation->set_rules('contactNumber','Contact Number','required');
        
        // if($this->form_validation->run() == FALSE )
        // {
            $data['title']   = ucfirst('Registration Page');
            $data['header_title'] = "Attendance Monitoring System";
            $this->load->view('templates/header', $data);
            $this->load->view('pages/registration', $data);
            $this->load->view('templates/footer', $data);
           
        // }
        // else {
            $this->user_model->new_registration();
            $this->session->set_flashdata('members_added','New members has been added successfully');
            redirect('index.php/user/registration');
        // }
      
      
    }
}