<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); 
class Socio_controller extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('socio');
    }

	public function index()
	{
		$this->load->view('back/login_views');
	}

	public function all()
	{
		if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $dat['usuario'] = $session_data['usuario'];
            $data = array(
		        'socios' => $this->socio->get_socios()
		    );
            $this->load->view('back/socio_views', array_merge($dat, $data));
        }
        else
        {
            //If no session, redirect to login page
            redirect('panel', 'refresh');
        }
		
	}

	function edit(){
		$id = $this->uri->segment(4);
		//$dat['id'] = $id;
		$datos_socios = $this->socio->update_socios($id);
		if ($datos_socios != FALSE) {
			foreach ($datos_socios->result() as $row) {
				$nombre = $row->nombre;
				$apellido = $row->apellido;
				$dias_prestamos = $row->dias_prestamos;
				$usuario = $row->usuario;
				$pass = base64_decode($row->pass);


			}
			$data = array('socio' =>$datos_socios,
						  'id'=>$id,
						  'nombre'=>$nombre,
						  'apellido'=>$apellido,
						  'dias_prestamos'=>$dias_prestamos,
						  'usuario'=>$usuario,
						  'pass'=>$pass
					);
		} else {
			return FALSE;
		}		
		$this->load->view('back/edit_socio_views',$data);
	}

	function editar_socio(){
		$id = $this->uri->segment(4);
		$pass = $this->input->post('pass',true);
		$data = array(
			'nombre'=>$this->input->post('nombre',true),
			'apellido'=>$this->input->post('apellido',true),
			'dias_prestamos'=>$this->input->post('dias_prestamos',true),
			'usuario'=>$this->input->post('usuario',true),
			'pass'=>base64_encode($pass)
			);
		$this->socio->set_socio($id, $data);
		redirect('misdatos', 'refresh');
	}

}
/* End of file welcome.php */
/* Location: ./application/controllers/back/usuario_controller.php */