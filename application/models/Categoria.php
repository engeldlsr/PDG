<?php

class Categoria extends CI_Model {

    public $table = 'tbl_categoria';
    public $table_id = 'id';
    public $display = 'display';

    function find($id)
    {
        $this->db->select();
        $this->db->from( $this->table);
        $this->db->where( $this->table_id, $id );
        
        $query = $this->db->get();
        return $query->row();
    }

    // Muestra solo las categorias que tengas display si en la DB.
    function findAll()
    {
        $this->db->select();
        $this->db->from($this->table);
        $this->db->where($this->display, 1);
        
        $query = $this->db->get();
        return $query->result();
    }

    // Muestra todas las categorias sin execcion. 
    function showAll()
    {
        $this->db->select();
        $this->db->from($this->table);

        $query = $this->db->get();
        return $query->result();
    }

    public function muestra_por_grupo()
    {
        $this->db->select('tbl_categoria.nombre AS nomCat');
        $this->db->from('tbl_categoria');
        $this->db->join('tbl_sub_categoria', 'tbl_categoria.sub_categoria = 2');
        $this->db->where('tbl_sub_categoria.id = 2');
        
        $sql = $this->db->get();
        return $sql->result();
    }

    function insert()
    {
        $data = $this->input->post();
        
        if($data['Sub_Categoria'] == 0)
        {
            $data['Sub_Categoria'] = NULL;
        }

        $insert = $this->db->insert($this->table, $data);

        return $insert ? true : false;
    }

    function updateCatategoria($id)
    {
        $data = $this->input->post();

        if($data['Sub_Categoria'] == 0)
        {
            $data['Sub_Categoria'] = NULL;
        }
        
        $this->db->where($this->table_id, $id);

        $update = $this->db->update($this->table, $data);

        return $update ? true : false;
    }

    function deleteCat()
    {
        
    }

    // Sub Categorias
    public function subCategoria()
    {
        $this->db->select();
        $this->db->from('tbl_sub_categoria');
        $sql = $this->db->get();
        return $sql->result();
    }

    public function subCategoriaById($id)
    {

    }

    public function actualizarSubCategoria($id)
    {

    }

    public function borrarSubCategoria($id)
    {

    }
}