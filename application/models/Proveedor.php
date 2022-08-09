<?php

class Proveedor extends CI_Model {

    public $table = "tbl_proveedores";
    public $table_id = "id";

    public function get()
    {
        $this->db->select();
        $this->db->from($this->table);
        $sql = $this->db->get();

        return $sql->result();
    }

    public function getById($id)
    {
        $this->db->select();
        $this->db->from($this->table);
        $this->db->where($this->table_id, $id);
        $sql = $this->db->get();

        return $sql->row();
    }
    
    public function insert()
    {
        $data = $this->input->post();

        $insert = $this->db->insert($this->table, $data);

        return $insert ? true : false;
    }
}