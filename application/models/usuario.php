<?php
Class Usuario extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }

    function login($username, $password)
    {
        $this->db->select('id, usuario, pass');
        $this->db->from('socios');
        $this->db->where('usuario', $username);
        $this->db->where('pass', base64_encode($password));
        $this->db->limit(1);

        $query = $this->db->get();

        if($query->num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }

    function get_socios()
    {
        $this->db->select('*');
        $this->db->from('socios');
        $query = $this->db->get();
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }
        
    }
    function update_socios($id){
        /*$this->db->where('id', $id);
        $query = $this->db->get('socios');*/
        $this->db->select('*');
        $this->db->from('socios');
        $this->db->where('id', $id);
        $query = $this->db->get();
        if($query->num_rows()==1) {
            return $query;
        } else {
            return FALSE;
        }
    }
    function set_socio($id, $data){
        $this->db->where('id', $id);
        $this->db->update('socios', $data);
    }
}
/* End of file usuario.php */
/* Location: ./application/models/usuario.php */
