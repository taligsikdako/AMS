
<?php


class Site extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->helper('url');
        
    }

    function index()
    {
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $data['title']   = ucfirst('Tasker Login System');
        $this->load->view('templates/login_header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/login_footer', $data);
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
        $password = md5($this->input->post('password'));

        $user_id = $this->user_model->login($username,$password);
        if($user_id) {
            $user_data = array (
              'id' => $user_id->id, 
              'username' => $username,
            //   'user_group' =>$user_id->$user_group,
            //   'user_status' =>$user_id->$user_status,
            //   'user_email' =>$user_id->$user_email,
              'logged_in' => true
            );

            $this->session->set_userdata($user_data);
            $this->session->set_flashdata('user_loggedin','Welcome, ');
            redirect(base_url() . 'index.php/site/dashboard');
            // die('login success');
        } else {
            			 //Set message
			 $this->session->set_flashdata('failed_login','Login is Invalid');
			 redirect(base_url());
        }
        
       } 
       else   {
        $data['title'] = ucfirst("Page"); // Capitalize the first letter
        $data['title']   = ucfirst('Tasker Login System');
        $this->load->view('templates/login_header', $data);
        $this->load->view('pages/login', $data);
        $this->load->view('templates/login_footer', $data);
       }
    }

    function dashboard()
    {
      if ($this->session->userdata('logged_in'))
      {
        $data['title'] = "Admin - Tasker Dashboard";
        $this->load->view('templates/dashboard_header',$data);
        $this->load->view('pages/dashboard/admin_dashboard');
        $this->load->view('templates/dashboard_footer');
      }
      else  {
        redirect(base_url());
      }
   
    }

    function attendance()
    {

      $data['title'] = "Attendance";
      $this->load->view('templates/dashboard_header',$data);
      $this->load->view('pages/dashboard/attendance');
      $this->load->view('templates/dashboard_footer');
    }

    function manage_users()
    {
      if ($this->session->userdata('logged_in'))
      {
      $data['title'] = "Manage Users";
      $this->load->view('templates/dashboard_header',$data);
      $this->load->view('pages/dashboard/manage_users');
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