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
        $this->load->model('libro','', TRUE);

    }
    /**
    * Función que verifica si el usuario esta logueado
    * @access private    
    */
    private function _veri_log()
    {
    	if ($this->session->userdata('logged_in')) {
    		return TRUE;
    	} else {
    		return FALSE;
    	}
    	
    }
    /**
    * Función principal del controlador ejecuta por defecto si no nombramos el metodo.
    *@access  public
    */ 
	public function index()
	{
		if($this->_veri_log())
        {
        	$session_data = $this->session->userdata('logged_in');
            $dat['usuario'] = $session_data['usuario'];    		
			$data = array(
			        'libros' => $this->libro->get_libros()
			);
			$this->load->view('back/libro/libro_views',array_merge($data,$dat));
		}else{
			redirect('ingreso', 'refresh');
		}
	}
	/**
	* Llamo a la vista inse_libro_views
	*/
	function form_insert_l(){
		if($this->_veri_log())
        {
        	$session_data = $this->session->userdata('logged_in');
            $dat['usuario'] = $session_data['usuario'];   
			$this->load->view('back/libro/inse_libro_views',$dat);
		}else{
			redirect('ingreso', 'refresh');
		}
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
		$this->form_validation->set_rules('filename', 'Imagen', 'callback__image_upload');
		

		//Mensaje del form_validation
		$this->form_validation->set_message('required','<div class="alert alert-danger">El campo %s es obligatorio</div>');
		$this->form_validation->set_message('numeric','<div class="alert alert-danger">El campo %s debe contener un valor numérico</div>'); 
		
		
		if (!$this->form_validation->run())
		{
			if($this->_veri_log())
        	{
	        	$session_data = $this->session->userdata('logged_in');
	            $dat['usuario'] = $session_data['usuario'];   
				$this->load->view('back/libro/inse_libro_views', $dat);
			}else{
				redirect('ingreso', 'refresh');
			}
		}
		else
		{
			$this->_image_upload();			
		}
	}
	/**
	* Obtiene los datos del archivo imagen.
	* Permite archivos gif, jpg, png
	* Verifica si los datos son correcto en conjunto con la imagen y lo inserta en la tabla correspondiente
	* En la tabla guarda la URL de donde se encuentra la imagen.
	*/
	function _image_upload()
	{
		  $this->load->library('upload');
 
            //Comprueba si hay un archivo cargado
            if (!empty($_FILES['filename']['name']))
            {
                // Especifica la configuración para el archivo
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';

                $config['max_size'] = '2048';
                $config['max_width']  = '1024';
                $config['max_height']  = '768';       
 
                // Inicializa la configuración para el archivo 
                $this->upload->initialize($config);
 
                
                if ($this->upload->do_upload('filename'))
                {
                	// Mueve archivo a la carpeta indicada en la variable $data
                    $data = $this->upload->data();
                    // Path donde guarda el archivo..
                    $url ="uploads/".$_FILES['filename']['name'];
                    // Array de datos para insertar en libros 
                    $data = array(
						'titulo'=>$this->input->post('titulo',true),
						'edicion'=>$this->input->post('edicion',true),
						'editorial'=>$this->input->post('editorial',true),
						'anio'=>$this->input->post('anio',true),
						'imagen'=>$url,
						'stock'=>$this->input->post('stock',true),
						'stock_minimo'=>$this->input->post('stock_minimo',true)

					);
					$datos_libros = $this->libro->create_libro($data);
					redirect('libros', 'refresh');
					return TRUE;
                }
                else
                {
                	//Mensaje de error si no existe imagen correcta
                    $imageerrors = '<div class="alert alert-danger">El campo %s es incorrecta, extención incorrecto o excede el tamaño permitido que es de: 2MB </div>';//$this->upload->display_errors();
					$this->form_validation->set_message('_image_upload',$imageerrors );
					
					return false;
                }
 
            }
	
	}
	/**
    * Función edit que obtiene todos los datos del libro referenciado por un id
    * y lo muestra en la vista back/edit_libro_views con el parametro $data
    * @access  public
    */ 
	function edit(){
		$id = $this->uri->segment(2);
		$datos_libro = $this->libro->update_libro($id);
		if ($datos_libro != FALSE) {
			foreach ($datos_libro->result() as $row) {
				$titulo = $row->titulo;
				$edicion = $row->edicion;
				$editorial = $row->editorial;
				$anio = $row->anio;
				$imagen = $row->imagen;
				$stock = $row->stock;
				$stock_minimo = $row->stock_minimo;
				
			}
			$data = array('libro' =>$datos_libro,
						  'id'=>$id,
						  'titulo'=>$titulo,
						  'edicion'=>$edicion,
						  'editorial'=>$editorial,
						  'anio'=>$anio,
						  'imagen'=>$imagen,
						  'stock'=>$stock,
						  'stock_minimo'=>$stock_minimo
					);
		} else {
			return FALSE;
		}		
		if($this->_veri_log())
        {
	    	$session_data = $this->session->userdata('logged_in');
	        $dat['usuario'] = $session_data['usuario'];   
			$this->load->view('back/libro/edit_libro_views',array_merge($data,$dat));
		}else{
			redirect('ingreso', 'refresh');
		}
		
	}
	/**
    * Función editar_libro obtiene los datos de la vista back/edit_libro_views
    * y ejecuta el metodo para actualizar los datos del libro, si es correcto la actualización
    * Valido formulario
    * redirige a la ruta mis datos
    * @access  public
    */ 
	function editar_libro(){
		//Validación del formulario
		$this->form_validation->set_rules('title', 'Titulo', 'required');
		$this->form_validation->set_rules('edicion', 'Edicion', 'required');
		$this->form_validation->set_rules('editorial', 'Editorial', 'required');
		$this->form_validation->set_rules('anio', 'Año', 'required|numeric');
		$this->form_validation->set_rules('stock', 'Stock', 'required|numeric');
		$this->form_validation->set_rules('stock_minimo', 'Stock Minimo', 'required|numeric');
		$this->form_validation->set_rules('filename', 'Imagen', 'callback__image_modif');
		

		//Mensaje del form_validation
		$this->form_validation->set_message('required','<div class="alert alert-danger">El campo %s es obligatorio</div>');
		$this->form_validation->set_message('numeric','<div class="alert alert-danger">El campo %s debe contener un valor numérico</div>'); 
		
		
		if (!$this->form_validation->run())
		{
			if($this->_veri_log())
        	{
	        	$session_data = $this->session->userdata('logged_in');
	            $dat['usuario'] = $session_data['usuario'];   
				$this->load->view('back/libro/edit_libro_views', $dat);
			}else{
				redirect('ingreso', 'refresh');
			}
		}
		else
		{
			$this->_image_modif();		
		}
		
		
	}
	/**
	* Obtiene los datos del archivo imagen.
	* Permite archivos gif, jpg, png
	* Verifica si los datos son correcto en conjunto con la imagen y lo inserta en la tabla correspondiente
	* Si el campo imagen se encuentra vacio asume que la imagen no fue moficado.
	* En la tabla guarda la URL de donde se encuentra la imagen.
	*/
	function _image_modif()
	{
		//Cargo la libreria para subir archivos
		$this->load->library('upload');
		// Obtengo el id del libro
		$id = $this->uri->segment(2);
        // Array de datos para obtener datos de libros sin la imagen 
		$dat = array(
			'titulo'=>$this->input->post('titulo',true),
			'edicion'=>$this->input->post('edicion',true),
			'editorial'=>$this->input->post('editorial',true),
			'anio'=>$this->input->post('anio',true),
			'stock'=>$this->input->post('stock',true),
			'stock_minimo'=>$this->input->post('stock_minimo',true)
		);
		// Si la iamgen esta vacia se asume que no se modifica
        if (!empty($_FILES['filename']['name']))
		{            
                // Especifica la configuración para el archivo
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';

                $config['max_size'] = '2048';
                $config['max_width']  = '1024';
                $config['max_height']  = '768';       
 
                // Inicializa la configuración para el archivo 
                $this->upload->initialize($config);
                 
                if ($this->upload->do_upload('filename'))
                {
                	// Mueve archivo a la carpeta indicada en la variable $data
                    $data = $this->upload->data();
                    // Path donde guarda el archivo..
                    $url ="uploads/".$_FILES['filename']['name'];
                 	// Agrego la imagen si se modifico.  
					$dat['imagen']=$url;
					// Actualiza datos del libro
					$this->libro->set_libro($id, $dat);
					redirect('libros', 'refresh');
                }
                else
                {
                	//Mensaje de error si no existe imagen correcta
                    $imageerrors = '<div class="alert alert-danger">El campo %s es incorrecta, extención incorrecto o excede el tamaño permitido que es de: 2MB </div>';
                    $this->form_validation->set_message('_image_modif',$imageerrors );
					return false;
                } 
        }else{
        	
            $this->libro->set_libro($id, $dat);
			redirect('libros', 'refresh');
		}
    }
}
/* End of file libro_controller.php */
/* Location: ./application/controllers/back/usuario_controller.php */