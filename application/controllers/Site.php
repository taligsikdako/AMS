
<?php


class Site extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->helper('url');
        $this->load->library('session'); 
        $this->load->library('form_validation');
        $this->load->model('report_model');

             
    }

    function index()
    {
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $data['title']   = ucwords('Attendance Monitoring System');
        $this->load->view('templates/login_header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/login_footer', $data);
    }
 
    function login_validation() //verify user if credential exist
    {
       $this->form_validation->set_rules('username','username','required');
       $this->form_validation->set_rules('password','user password','required');

       if($this->form_validation->run())
       {
        // die('login success');
        //Get Login credentials username & password
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $user_id = $this->user_model->can_login($username,$password);
        if($user_id) {
          //create sessions
            $userdata = array (      
              'id'       => $user_id->id,
              'username' => $username,           
              'password' => $password,   
              'user_group' => $user_id->usergroup,
              'logged_in' => true
            );
            $this->session->set_userdata($userdata);

            $this->session->set_flashdata('user_loggedin','Welcome, ');
            redirect(base_url() . 'index.php/site/dashboard');
   
        } else {
            			 //Set message
			 $this->session->set_flashdata('failed_login','Login is Invalid');
			 redirect(base_url());
        }
        
       } 
       else   {
        $data['title'] = ucfirst("Page"); // Capitalize the first letter
        $data['title']   = ucfirst('Attendance Monitoring System');
        $this->load->view('templates/login_header', $data);
        $this->load->view('pages/login', $data);
        $this->load->view('templates/login_footer', $data);
       }
    }

    function dashboard()
    {
      if ($this->session->userdata('logged_in'))
      {
        // Report Get NUmber of Registered Users
				$usersNo = $this->report_model->get_NumberOfUsers();
        $data['totalUsersNo'] = $usersNo[0]->no;
          // Report Get NUmber of Trainees
				$usersNo = $this->report_model->get_NumberOfTrainee();
        $data['totalTrainees'] = $usersNo[0]->no;
        
        $data['header_title'] = "AMS - Admin Dashboard";
        $data['nav_title'] = "Admin Dashboard ";
        
        $this->load->view('templates/dashboard_header',$data);
        $this->load->view('templates/dashboard_nav', $data);
        $this->load->view('pages/admin/dashboard',$data);
        $this->load->view('templates/dashboard_footer');
      }
      else  {
        redirect(base_url());
      }
   
    }

    function user_dashboard()
    {
       // Report Get NUmber of Registered Users
			$usersNo = $this->report_model->get_NumberOfUsers();
      $data['totalUsersNo'] = $usersNo[0]->no;
      $data['title'] = "User - Tasker Dashboard";
      $this->load->view('templates/dashboard_header',$data);
      $this->load->view('pages/dashboard/user_dashboard',$data);
      $this->load->view('templates/dashboard_footer');
    }

    function accounts()
    {
      if ($this->session->userdata('logged_in'))
      {
      $data['getAllUsers']   = $this->user_model->getAllUsers();
      $data['header_title'] = "AMS - Manage Accounts";
      $data['nav_title'] = "Manage Accounts ";
      $data['body_title'] = "Manage Accounts";
      $this->load->view('templates/dashboard_header',$data);
      $this->load->view('templates/dashboard_nav',$data);
      $this->load->view('pages/admin/account_list');
      $this->load->view('templates/dashboard_footer');
      }
      else {
        redirect(base_url());
      }
    }

    function logout()
		{
			$this->session->unset_userdata('logged_in');
			redirect(base_url());
		}

}