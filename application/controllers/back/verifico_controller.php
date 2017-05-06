<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verifico_controller extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('socio','',TRUE);

    }
 
    function index()
    {
        //This method will have the credentials validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules('usuario', 'Usuario', 'trim|required|xss_clean');
        $this->form_validation->set_rules('pass', 'Pass', 'trim|required|xss_clean|callback_check_database');

        if($this->form_validation->run() == FALSE)
        {
            //Field validation failed.  User redirected to login page
            $this->load->view('back/login_views');
        }
        else
        {
            //Go to private area
            redirect('panel', 'refresh');
        }

    }

    function check_database($password)
    {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('usuario');
        //query the database
        $result = $this->socio->login($username, $password);
 
        if($result)
        {
           $sess_array = array();
           foreach($result as $row)
           {
                $sess_array = array(
                    'id' => $row->id,
                    'usuario' => $row->usuario
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('check_database', '<div class="alert alert-danger">usuario o contraseña invalido</div>');
            return false;
        }
    }
}
/* End of file verifico_controller.php */
/* Location: ./application/controllers/back/verifico_controller.php */
