<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario_controller extends CI_Controller {

	public function index()
	{
		$this->load->view('back/login_views');
	}

	public function all()
	{
		if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['usuario'] = $session_data['usuario'];
            $this->load->view('usuario_views', $data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('usuario_controller', 'refresh');
        }
		
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/back/usuario_controller.php */