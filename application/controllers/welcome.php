<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Constructor del Controller
	 *
	 * @package     front
	 * Cargo los modelos necesarios
	*/ 
	function __construct() {
        parent::__construct();
        $this->load->model('libro');

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
		$data = array(
			        'libros' => $this->libro->get_libros()
		);
		$this->load->view('partes/front/head_views_front');
		$this->load->view('welcome_message', $data);
		$this->load->view('partes/front/footer_views_front');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */