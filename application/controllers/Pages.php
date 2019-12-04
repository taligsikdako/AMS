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

        $data['title'] = ucfirst($page); // Capitalize the first letter
        $data['title']   = ucfirst('Tasker Login System');
        $this->load->view('templates/login_header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/login_footer', $data);
    }


}
