<?php
/**
 * Perfil Class
 *
 * @package Models
 * @category    Perfil
 * @author      Lic. Romero, Carlos Alberto
*/
Class Perfil extends CI_Model
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
    * Retorna todos los perfiles registrados
    *
    * @access  public
    * @param   No recibe
    * @return  array
    */
    function get_perfiles()
    {

        $query = $this->db->get("perfiles");

        // si hay resultados
        if ($query->num_rows() > 0) {
            // almacenamos en una matriz bidimensional
            foreach($query->result() as $row){
                 $datos[$row->id] =$row->nombre;
            }
            return $datos;
         }

        
    }
    
}
/* End of file usuario.php */
/* Location: ./application/models/usuario.php */
