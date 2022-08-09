<?php

class Productos extends CI_Model {

    public $table = 'tbl_producto';
    public $productoId = 'id_producto';

    function __construct()
    {
        parent::__construct();
    }

    // Recupero todos los productos de la base de datos
    public function listar_productos()
    {
        $this->db->select();
        $this->db->from($this->table);
        $sql = $this->db->get();
        return $sql->result();
    }

    // Recupero los ultimos 4 productos de la base de dato
    public function ultimosProductos($limit, $diferente = null)
    {
        $this->db->select();
        $this->db->from($this->table);
        $this->db->where("id_categoria != 16 and id_categoria != 14");
        $this->db->limit($limit);
        $this->db->order_by($this->productoId, 'DESC');
        $sql = $this->db->get();

        if($sql->num_rows() == 0)
        {
            $msg = 0;

            return $msg;
        }

        return $sql->result();
    }

    public function selectById($id)
    {
        $this->db->select();
        $this->db->from($this->table);
        $this->db->where($this->productoId, $id);

        $sql = $this->db->get();

        return $sql->row();
    }

    public function getRows($id = '')
    {
        $this->db->select();
        $this->db->from($this->table);
        $this->db->where($this->productoId, $id);
        $sql = $this->db->get();

        return $sql->row();
    }

    function insert()
    {
        //$data = $this->input->post();
        $data = array (
            'nombre'        => $_POST['nombre'],
            'precio'        => $_POST['precio'],
            'descripcion'   => $_POST['descripcion'],
            'foto'          => date('Ymd-') . $_FILES['upload']['name'],
            'stock'         => $_POST['stock'],
            'id_categoria'  => $_POST['id_categoria']
        );

        $insert = $this->db->insert($this->table, $data);
        
        if($this->db->affected_rows() == 1)
        {
            // Subo la imagen del producto 
            $dir_subida = 'uploads/';
            $fichero = $dir_subida . date('Ymd-') . $_FILES['upload']['name'];
            move_uploaded_file($_FILES['upload']['tmp_name'], $fichero);
            var_dump($fichero);
        }

        return $insert ? true : false;
    }

    public function insertTransaction($data = array()) {
        $insert = $this->db->insert('payments', $data);
        return $insert ? true : false;
    }


    // Metodos para cargar los productos en las diferentes paginas principales
    public function __select($tabla, $campo, $value, $limit = null)
    {
        $this->db->select();
        $this->db->from($tabla);
        $this->db->where($campo, $value);
        $this->db->limit($limit);
        $select = $this->db->get();

        if($select->num_rows() == 0)
        {
            $msg = 0;
            return $msg;
        }

        return $select->result();
    }

    public function __selectLimit($tabla, $campo, $value, $limit)
    {
        $this->db->select();
        $this->db->from($tabla);
        $this->db->where($campo, $value);
        $this->db->limit($limit);
        $select = $this->db->get();

        if($select->num_rows() == 0)
        {
            $msg = 0;
            return $msg;
        }

        return $select->result();
    }


}