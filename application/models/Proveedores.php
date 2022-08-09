<?php

class Proveedores extends CI_Model {

    public $table = 'tbl_proveedores';
    public $proveedor_id = 'id';

    function construct()
    {
        parent::__construct();
    }

    public function find($id)
    {
        $this->db->select();
        $this->db->from($this->table);
        $this->db->where($this->table, $id);
        $sql = $this->db->get();

        return $sql->row();
    }

    public function findAll()
    {
        $this->db->select();
        $this->db->from($this->table);
        $sql = $this->db->get();

        return $sql->row();
    }

    public function insert()
    {

    }

    public function update($id)
    {

    }

    public function delete($id)
    {

    }
}