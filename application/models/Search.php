<?php

class Search extends CI_Model {
    
    public $table = "";
    public $id_categoria = 'id_categoria';
    public $campo = "";

    function __construct()
    {
        parent::__construct();
    }


    public function __select($table, $id_categoria, $campo, $value)
    {
        $this->db->select();
        $this->db->from($table);
        $this->db->where($this->id_categoria, $id_categoria);
        $this->db->like($campo,  $value, $escape =  NULL);


        $select = $this->db->get();
        
        return $select->result();
    }
}