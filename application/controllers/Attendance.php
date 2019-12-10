
<?php


class Attendance extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->helper('url');        
        $this->load->model('attendance_model');  
        $this->load->library('form_validation');   
             
    }

    public function index()
    {
        if($this->session->userdata('logged_in'))
        {      
        $data['fetchAllEmployeeLogs']   = $this->report_model->fetchAllEmployeeLogs();
        $data['fetchLoggedinByEmployee']   = $this->report_model->fetchLoggedinByEmployee();
        $data['header_title'] = "AMS - Attendance";
        $data['nav_title'] = "Attendance Monitoring System";
        $this->load->view('templates/dashboard_header',$data);
        $this->load->view('templates/dashboard_nav',$data);
        $this->load->view('pages/admin/attendance',$data);
        $this->load->view('templates/dashboard_footer');
        } else {
            redirect(base_url());
        }
    }

    public function employee_loggedin()
    {
        $this->form_validation->set_rules('select_shift','shift','required'); 
        if($this->form_validation->run() == FALSE  )
        {
            $data['fetchAllEmployeeLogs']   = $this->report_model->fetchAllEmployeeLogs();
            $data['fetchLoggedinByEmployee']   = $this->report_model->fetchLoggedinByEmployee();
            $data['header_title'] = "AMS - Attendance";
            $data['nav_title'] = "Attendance Monitoring System";
            $this->load->view('templates/dashboard_header',$data);
            $this->load->view('templates/dashboard_nav',$data);
            $this->load->view('pages/user/attendance',$data);
            $this->load->view('templates/dashboard_footer');
        } else {
            $this->attendance_model->employee_loggedin();
            $this->session->set_flashdata('employee_loggedin','You have loggedin successfully');
            redirect('attendance');
        }
      

      
    }
 
   
}


?>