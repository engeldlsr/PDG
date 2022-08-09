<?php

class Ventas extends CI_Model {

    public $table = "tbl_factura";
    public $table_id = "id";

    function __construct()
    {
        parent::__construct();
    }

    // Muestra las ventas realizadas durante los ultimos 7 dias
    public function reporte_de_ventas_ultimos_7_dias()
    {
        $query = "SELECT COUNT(id_factura) AS Ventas7Dias FROM `tbl_factura` WHERE fecha BETWEEN DATE(DATE_SUB(NOW(), INTERVAL 7 DAY) ) AND NOW()";
        $this->db->from($this->table);
        $this->db->select();
        $sql = $this->db->query($query);

        return $sql->row();
  
    }

    // Mustra la suma de las ventas realizadas y las agrupa por dias.
    public function reporteDeVentas()
    {
        $query = "SELECT SUM(tbl_detalle.precio) AS total, tbl_factura.fecha FROM tbl_factura
        INNER JOIN tbl_detalle ON tbl_detalle.id_factura = tbl_factura.id_factura
        GROUP BY DAY(tbl_factura.fecha)";
        $sql = $this->db->query($query);
        return $sql->result();
    }

    // Muestra el cliente que realizo la compra, fecha y estado en que se encuentra esa compra
    public function estadoVenta()
    {
        /**
         SELECT 
        `tbl_factura`.`id_factura`,
        `tbl_detalle`.`id_producto`, 
        `tbl_producto`.`nombre`, 
        `tbl_detalle`.`cantidad`, 
        `tbl_detalle`.`precio`  
        FROM `tbl_factura`
        INNER JOIN `tbl_detalle` ON `tbl_detalle`.`id_factura` = `tbl_factura`.`id_factura`
        INNER JOIN `tbl_producto` ON `tbl_detalle`.`id_producto` = `tbl_producto`.`id_producto`
         */

        //$this->db->join('comments', 'comments.id = blogs.id');
        $query = "SELECT *, `id_factura`, `id_cliente`, `nombre`, `fecha`, `estado` as `c` FROM (`tbl_factura`) JOIN `tbl_cliente` ON `tbl_cliente`.`id` = `tbl_factura`.`id_cliente` JOIN `tbl_estadocompra` ON `tbl_estadocompra`.`factura_id` = `tbl_factura`.`id_factura`";

       $sql = $this->db->query($query);


        return $sql->result();
    }


}