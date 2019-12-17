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
        $this->form_validation->set_rules('username','username','required|callback_check_username_exists');       
        $this->form_validation->set_rules('password','password','required');
        $this->form_validation->set_rules('firstName','Name','required');
        $this->form_validation->set_rules('lastName','Last Name','required');
        $this->form_validation->set_rules('Email', 'user email', 'required|valid_email|callback_check_email_exists');
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
        if ($this->session->userdata('logged_in'))
      {
        $data['header_title'] = "AMS - Update User Profile";
        $data['nav_title'] = "";
        $data['body_title'] = "Update Profile";
        $user_id = $this->uri->segment(3);
        $data["get_usergroup"] = $this->user_model->get_usergroup();
        $data['fetch_user'] = $this->user_model->fetch_user($user_id);
        $this->load->view('templates/dashboard_header',$data);
        $this->load->view('templates/dashboard_nav',$data);
        $this->load->view('pages/user/update_user');
        $this->load->view('templates/dashboard_footer');
      } else  {
         redirect(base_url());
      }
    }

    function update_user_validation()
    {
        //load assets_model
        $this->load->model('user_model');
        $updatedata = array(
            'user_group' => $this->input->post('select_group'),
            'user_status' => $this->input->post('userStatus'),
            'contactNumber' => $this->input->post('contactNumber'),
            'address' => ucwords($this->input->post('address'))
        );
            
        if($this->input->post('update'))
        {
            $this->user_model->update_user($updatedata, $this->input->post('hidden_id'));
            $this->session->set_flashdata('user_updated','Users has been updated successfully');
            redirect('index.php/site/accounts');
        }
    }

    function update_password_validation()
    {
        $data = array('success' => false, 'messages' => array());

        $this->load->library('form_validation');
        $this->form_validation->set_rules('new_password','new password','required');
        $this->form_validation->set_rules('confirm_password','confirm password','required|matches[new_password]');
        $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
        
        if ($this->form_validation->run()) {
        $data['success'] = true;
        $username =  $this->session->userdata('username');
        $password = $this->input->post('new_password');
        $this->user_model->update_password($username,$password);
        }
        else
        {
        foreach ($_POST as $key => $value)
        {
            $data['messages'][$key] = form_error($key);
        }
        }

        echo json_encode($data);

    }

    function check_username_exists($username)
		{
			$this->form_validation->set_message('check_username_exists','This user account is taken already');
			if($this->user_model->check_username_exists($username))
			{
				return true;
			}
			else
			{
				return false;
			}
        }
        
        function check_email_exists($email)
		{
			$this->form_validation->set_message('check_email_exists','This email account is taken already');
			if($this->user_model->check_email_exists($email))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
			

    function attendance()
    {
        $data['header_title'] = "AMS - Update User Profile";
        $data['nav_title'] = "";
        $data['body_title'] = "Update Profile";
       
        $this->load->view('templates/dashboard_header',$data);
        $this->load->view('templates/dashboard_nav',$data);
        $this->load->view('pages/user/attendance');
        $this->load->view('templates/dashboard_footer');
    }
}