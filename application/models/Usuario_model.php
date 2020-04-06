<?php
class Usuario_model extends CI_Model {
    public $tabla = "usuario";
    public function __construct(){
        parent::__construct();
    }
    public function select($criterio = array(),$orden = "id asc",$limite=1,$offset=0){
        $this->db->select("*");
        $this->db->from($this->tabla);
        $this->db->where($criterio);
        $this->db->limit($limite,$limite*$offset);
        $result = $this->db->get()->result();
        if($limite == 1){
            if(count($result) != 0)
                $result = $result[0];
            else
                $result = array();
        }
        return $result;
    } 

    public function existe($criterio){
        $this->db->where($criterio);
        $existe = $this->db->get($this->tabla)->result();
        if(count($existe) != 0)
            return true;
        return false;
    }
    public function insert($data)
    {
        $this->db->insert($this->tabla, $data);
        $id = $this->db->insert_id();
        return $this->select(array("id"=>$id));
    }
}