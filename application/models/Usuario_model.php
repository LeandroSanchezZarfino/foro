<?php
class Usuario_model extends CI_Model {
    public $tabla = "usuario";
    public function __construct(){
        parent::construct();
    }
    public function get_last_ten_entries()
    {
        $query = $this->db->get('entries', 10);
        return $query->result();
    }
    public function insert($data)
    {
        $this->db->insert($this->tabla, $data);
    }
    public function update_entry()
    {
        $this->title    = $_POST['title'];
        $this->content  = $_POST['content'];
        $this->date     = time();
        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }
}