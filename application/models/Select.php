<?php 

class Select extends CI_Model {

    public $tabla = '';
    public $tabla_id;


    function __select($tabla, $campo, $valor, $limit = null)
    {
        $this->db->select();
        $this->db->from($this->tabla);
        $this->db->limit($limit);
        $select = $this->db->get();

        if($select->num_rows() > 0){
            
            return $select->result();

        }else{

            return 'No se encontraron resultados.';
        }
    }

    function __selectById($tabla, $id)
    {
        $this->db->select();
        $this->db->from($this->tabla);
        $this->db->where($this->tabla_id, $id);
        $select = $this->db->get();
        
        if($select->num_rows() > 0){
            
            return $select->result();

        }else{

            return 'No se encontraron resultados.';
        }
    }
}