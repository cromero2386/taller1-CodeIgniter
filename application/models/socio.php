<?php
/**
 * Socio Class
 *
 * @package Models
 * @category    Socio
 * @author      Lic. Romero, Carlos Alberto
*/
Class Socio extends CI_Model
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
    * Retorna un array de dato del socio si existe en la base
    *
    * @access  public
    * @param   string ($username, $password)
    * @return  array
    */
    function login($username, $password)
    {
        $query = $this->db->get_where('socios', array('usuario'=>$username,'pass'=>base64_encode($password)), 1);

        if($query->num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
    /**
    * Retorna el nombre del usuario
    *
    * @access  public
    * @param   string ($usuario, $pass)
    * @return  dato
    */
    function valid_user_ajax($usuario, $pass){
          
        $query = $this->db->get_where('socios', array('usuario'=>$usuario,'pass'=>base64_encode($pass)));
        
        if($query->num_rows() >0){
            foreach($query->result() as $row){
                 $datos=$row->nombre;
            }
            echo $datos;
        }
    }
    /**
    * Retorna todos los socios registrados
    *
    * @access  public
    * @param   No recibe
    * @return  array
    */
    function get_socios()
    {

        $query = $this->db->get("socios");
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }
        
    }
    /**
    * Retorna todos los datos de un socio
    *
    * @access  public
    * @param   int($id)
    * @return  array
    */
    function update_socios($id){

        $query = $this->db->get_where('socios', array('id' => $id),1);
                
        if($query->num_rows() == 1) {
            return $query;
        } else {
            return FALSE;
        }
    }
    /**
    * Actualiza los datos de un socio
    *
    * @access  public
    * @param   int($id), array($data)
    * @return  boolean
    */
    function set_socio($id, $data){
        $this->db->where('id', $id);
        $query = $this->db->update('socios', $data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    /**
    * Inserta todos los datos de un socio
    *
    * @access  public
    * @param   array
    * @return  boolean
    */
    public function create_socio($data){
        $this->db->insert('socios', $data);
    }
}
/* End of file usuario.php */
/* Location: ./application/models/usuario.php */
