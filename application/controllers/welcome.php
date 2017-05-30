<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Constructor del Controller
	 *
	 * @package     front
	 * Cargo los modelos necesarios
	*/ 
	function __construct()
	{
        parent::__construct();
        $this->load->model('libro');
        $this->load->model('socio');

    }
    
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('partes/front/head_views_front');
		$this->load->view('welcome_message');
		$this->load->view('partes/front/footer_views_front');
	}

	/*
    * Carga todos los libros disponibles
    *
    */
    function libro()
    {
    	
		$data = array(
			        'libros' => $this->libro->get_libros()
		);
		$this->load->view('partes/front/head_views_front');
		$this->load->view('libros_views', $data);
		$this->load->view('partes/front/footer_views_front');
		
    }

	/*
	* Función que verifica si los datos son enviados por AJAX
	* Envia al modelo socio para verificar si existe el usuario.
	*/

	function valid_login_ajax()
	{
    //verificamos si la petición es via ajax
		if($this->input->is_ajax_request()){

			if($this->input->post('usuario')!==''){
				$usuario = $this->input->post('usuario');
				$pass = $this->input->post('pass'); 
				$result = $this->socio->valid_user_ajax($usuario, $pass);  
				if ($result) {
					$data=[
						"id"=> $result->id,
						"nombre"=> $result->nombre,
						"login_ajax"=> TRUE
					];
					$this->session->set_userdata($data);
				} else {
					echo 'error';
				}
			}else{
				echo 'error';
			}
		}
    } // fin del método valid_login_ajax
    /*
    * Cierra sesión de ajax
    */
	function logout_ajax()
    {        
    	$this->session->unset_userdata('login_ajax');
        session_destroy();
    	redirect('');
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */