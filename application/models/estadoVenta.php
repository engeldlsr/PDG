<?php

class Ventas extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }


    // Muestra el cliente que realizo la compra, fecha y estado en que se encuentra esa compra
    public function estadoVenta()
    {
        //$this->db->join('comments', 'comments.id = blogs.id');
        
        $this->db->select('id_factura, id_cliente, nombre, fecha, estado as c');
        $this->db->from('tbl_factura');
        $this->db->join('tbl_cliente', 'tbl_cliente.id = tbl_factura.id_cliente');
        $this->db->join('tbl_estadocompra', 'tbl_estadocompra.factura_id = tbl_factura.id_factura');
        $sql = $this->db->get();
        
        return $sql->result();

    }


}