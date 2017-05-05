<?php 
session_start(); 
//we need to call PHP's session object to access it through CI
class Panel_controller extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
    }
 
    function index()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['usuario'] = $session_data['usuario'];
            $this->load->view('back/panel_views', $data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('back/usuario_controller', 'refresh');
        }
    }
 
    function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        //redirect('panel_controller', 'refresh');
        $this->load->view('back/login_views');
    }
 
}
/* End of file panel_controller.php */
/* Location: ./application/controllers/back/panel_controller.php */