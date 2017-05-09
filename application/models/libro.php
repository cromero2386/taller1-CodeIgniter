<?php
/**
 * Libro Class
 *
 * @package Models
 * @category    Libro
 * @author      Lic. Romero, Carlos Alberto
*/
Class Libro extends CI_Model
{
    /**
    * Constructor de la clase
    *
    * @access  public
    */
    public function __construct() {
        parent::__construct();
    }
    /**
    * Retorna todos los libros registrados
    *
    * @access  public
    * @param   No recibe
    * @return  array
    */
    function get_libros()
    {
        $query = $this->db->get("libros");
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }
    /**
    * Inserta todos los datos de un libro
    *
    * @access  public
    * @param   array
    * @return  boolean
    */
    public function create_libro($data){
        $this->db->insert('libros', $data);
    }
}
/* End of file libro.php */
/* Location: ./application/models/libro.php */