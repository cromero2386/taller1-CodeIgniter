<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Se encarga de manejar la sesion de un socio, ni no estas logeado no podrás ingresar al panel
session_start();
/**
 * Libro_controller
 *
 * @package     Controller/back
 * @author      Lic. Romero, Carlos Alberto
*/ 
class Libro_controller extends CI_Controller {
	/**
	 * Constructor del Controller
	 *
	 * @package     back
	 * Cargo modelo libro
	*/ 
	function __construct() {
        parent::__construct();
        $this->load->model('libro');

    }
    /**
    * Función principal del controlador ejecuta por defecto si no nombramos el metodo.
    * @access  public
    */ 
	public function index()
	{
		$data = array(
		        'libros' => $this->libro->get_libros()
		);
		$this->load->view('back/libro/libro_views',$data);
	}
	/**
	* Llamo a la vista inse_libro_views
	*/
	function form_insert_l(){
		$this->load->view('back/libro/inse_libro_views');
	}
	/**
	* Valida el formulario de libro y si es correcto la validación inserta el registro en la base de datos
	*/
	function insert_libro(){
		//Validación del formulario
		$this->form_validation->set_rules('title', 'Titulo', 'required');
		$this->form_validation->set_rules('edicion', 'Edicion', 'required');
		$this->form_validation->set_rules('editorial', 'Editorial', 'required');
		$this->form_validation->set_rules('anio', 'Año', 'required|numeric');
		$this->form_validation->set_rules('stock', 'Stock', 'required|numeric');
		$this->form_validation->set_rules('stock_minimo', 'Stock Minimo', 'required|numeric');
		$this->form_validation->set_rules('fil', 'FIl', 'callback__image_upload');
		

		//Mensaje del form_validation
		$this->form_validation->set_message('required','<div class="alert alert-danger">El campo %s es obligatorio</div>');
		$this->form_validation->set_message('numeric','<div class="alert alert-danger">El campo %s debe contener un valor numérico</div>'); 

		$this->form_validation->set_message('file_selected_test', '<div class="alert alert-danger">Por favor seleccione archivo de imagen</div>');
		//$url = $this->do_upload();
		
		if ($this->form_validation->run() == TRUE)
		{

			$this->load->view('back/libro/inse_libro_views');
		}
		else
		{
			$url ="./uploads/".$_FILES['fil']['name'];
			$data = array(
				'titulo'=>$this->input->post('titulo',true),
				'edicion'=>$this->input->post('edicion',true),
				'editorial'=>$this->input->post('editorial',true),
				'anio'=>$this->input->post('anio',true),
				'imagen'=>$url,
				'stock'=>$this->input->post('stock',true),
				'stock_minimo'=>$this->input->post('stock_minimo',true)

			);
			//Envio array el metodo insert para registro de datos
			$datos_socios = $this->libro->create_libro($data);
			redirect('libros', 'refresh');
		}
	}
	/*function file_selected_test(){

	    
	    if (empty($_FILES['fil']['name'])) {
	            return false;
	        }else{
	            return true;
	        }
	}
	private function do_upload()
	{
		$type = explode('.', $_FILES["fil"]["name"]);
		$type = strtolower($type[count($type)-1]);
		$url = "./uploads/".uniqid(rand()).'.'.$type;
		if(in_array($type, array("jpg", "jpeg", "gif", "png")))
		{
			if(is_uploaded_file($_FILES["fil"]["tmp_name"]))
			{
				if(move_uploaded_file($_FILES["fil"]["tmp_name"],$url))
				{
					return $url;
				}
			}
		}else{
			
			return "";
		}
	}
*/
		function _image_upload()
	{
		  $this->load->library('upload');
 
            // Check if there was a file uploaded
            if (!empty($_FILES['fil']['name']))
            {
                // Specify configuration for File 1
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '100';
                $config['max_width']  = '1024';
                $config['max_height']  = '768';       
 
                // Initialize config for File 1 
                $this->upload->initialize($config);
 
                // Upload file 1
                if ($this->upload->do_upload('fil'))
                {
                    $data = $this->upload->data();
					return true;
                }
                else
                {
                    $imageerrors = $this->upload->display_errors();
					$this->form_validation->set_message('_image_upload', $imageerrors);
					
					return false;
                }
 
            }
	
	}
}
/* End of file libro_controller.php */
/* Location: ./application/controllers/back/usuario_controller.php */