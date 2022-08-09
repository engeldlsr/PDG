<?php

class Cliente extends CI_Model {

    public $table = "tbl_cliente";
    public $table_id = "id";

    function __construct()
    {
        parent::__construct();
    }

    public function mostrarClientes()
    {
        $this->db->select();
        $this->db->from($this->table);
        $sql = $this->db->get();

        return $sql->result();
    }

    public function mostrarCliente($id)
    {
        $this->db->select();
        $this->db->from($this->table);
        $this->db->where($this->table_id, $id);
        $sql = $this->db->get();

        return $sql->result();
    }

    public function numTotalClientesRegistrados()
    {
        $query = "SELECT COUNT(id) AS numClientes FROM `tbl_cliente`";
        
        $sql = $this->db->query($query);
        return $sql->row();
    }

    public function reg_cliente()
    {
        $data = $this->input->post();

        $insert = $this->db->insert($this->table, $data);

        return $insert ? true : false;
    }

    public function login($email, $password)
    {
        $query = $this->db->get_where('tbl_cliente', array('email'=> $email, 'password' => $password) );
        return $query->row_array();
    }
}