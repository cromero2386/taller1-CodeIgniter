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
        $query = $this->db->get_where("libros", array('eliminado' => 'NO'));
        
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
    /**
    * Retorna todos los datos de un libro
    *
    * @access  public
    * @param   int($id)
    * @return  array
    */
    function update_libro($id){

        $query = $this->db->get_where('libros', array('id' => $id),1);
                
        if($query->num_rows() == 1) {
            return $query;
        } else {
            return FALSE;
        }
    }
    /**
    * Actualiza los datos de un libro
    *
    * @access  public
    * @param   int($id), array($data)
    * @return  boolean
    */
    function set_libro($id, $data){
        $this->db->where('id', $id);
        $query = $this->db->update('libros', $data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    /**
    * Eliminación y activación logica de un libro
    *
    * @access  public
    * @param   int($id), array($data)
    * @return  boolean
    */
    function estado_libro($id, $data){
        $this->db->where('id', $id);
        $query = $this->db->update('libros', $data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    /**
    * Retorna todos los libros inactivos
    *
    * @access  public
    * @param   No recibe
    * @return  array
    */
    function not_active_libros()
    {
        $query = $this->db->get_where("libros", array('eliminado' => 'SI'));
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }
}
/* End of file libro.php */
/* Location: ./application/models/libro.php */