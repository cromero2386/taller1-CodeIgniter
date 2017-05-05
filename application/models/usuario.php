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
        $this->db->where('pass', MD5($password));
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
}
/* End of file usuario.php */
/* Location: ./application/models/usuario.php */
