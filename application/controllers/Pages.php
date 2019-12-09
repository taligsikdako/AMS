<?php

class Pages extends CI_Controller
{
    public function view($page = 'login')
    {
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
        $data['header_title'] = "AMS - Attendance";
        $data['nav_title'] = "Attendance Monitoring";
        $data['title'] = ucfirst($page); // Capitalize the first letter
        // $data['title']   = ucfirst('Tasker Login System');
        $this->load->view('templates/login_header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/login_footer', $data);
    }

    // public function attendance()
    // {
    //     $data['header_title'] = "AMS - Attendance";
    //     $data['nav_title'] = "Attendance Monitoring System";
    //     $this->load->view('templates/dashboard_header',$data);
    //     $this->load->view('templates/dashboard_nav',$data);
    //     $this->load->view('pages/user/attendance');
    //     $this->load->view('templates/dashboard_footer');
    // }



}
