<?php 

class User extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->helper('url');
        $this->load->model('user_model');
        $this->load->library('form_validation');
        $this->load->library('session');
	

        
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
      

        // $user_name = $this->input->post('user_name');
        // $user_password = $this->input->post('user_password');

        // $data_users = $this->user_model->login($user_name,$user_password);

        // if($data_users)
        // {
        //     $this->session->set_userdata('user',$users);
        // }
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
        $this->form_validation->set_rules('username','username','required');       
        $this->form_validation->set_rules('password','password','required');
        $this->form_validation->set_rules('firstName','Name','required');
        $this->form_validation->set_rules('lastName','Last Name','required');
        $this->form_validation->set_rules('Email', 'user email', 'required|valid_email');
        $this->form_validation->set_rules('contactNumber','Contact Number','required');
        $this->form_validation->set_rules('address','address','required');
        
        if($this->form_validation->run() == FALSE  )
        {
            $data['title']   = ucfirst('Registration Page');
            $data['header_title'] = "Attendance Monitoring System";
            $this->load->view('templates/header', $data);
            $this->load->view('pages/registration', $data);
            $this->load->view('templates/footer', $data);
           
        }
        else {
            $this->user_model->new_registration();
            $this->session->set_flashdata('members_added','New members has been added successfully');
            redirect('index.php/user/registration');
        }            
    }

    function update_user($id)
    {
        $data['header_title'] = "AMS - Update User Profile";
        $data['nav_title'] = "";
        $data['body_title'] = "Update Profile";
        $user_id = $this->uri->segment(3);
        $data['fetch_user'] = $this->user_model->fetch_user($user_id);
        $this->load->view('templates/dashboard_header',$data);
        $this->load->view('templates/dashboard_nav',$data);
        $this->load->view('pages/user/update_user');
        $this->load->view('templates/dashboard_footer');
    }

    function update_user_validation()
    {
        //load assets_model
        $this->load->model('user_model');
        $data = array(
            'user_group' => $this->input->post('userGroup'),
            'user_status' => $this->input->post('userStatus'),
            'contactNumber' => $this->input->post('contactNumber'),
            // 'address' => $this->input->post('address'),
            'address' => ucwords($this->input->post('address'))
            // 'password' => md5($this->input->post('password'))
        );
            
        if($this->input->post('update'))
        {
            $this->user_model->update_user($data, $this->input->post('hidden_id'));
            $this->session->set_flashdata('user_updated','Tasker users has been updated successfully');
            redirect('index.php/site/manage_users');
        }
    }
}