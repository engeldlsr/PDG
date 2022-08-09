<?php
include_once('config.php');
class Proveedores extends WH_Controller {

    function __construct()
    {
        parent::__construct();
        
        if( !preg_match('/administrador/', current_url() ) )
        {
            redirect( base_url() );
        }

        $this->load->model('Proveedor');
    }

    public function proveedores()
    {
        $data['proveedores'] = $this->Proveedor->get();
        $data['tituloPagina'] = TituloPagina;
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        $this->load->view('back/proveedores/proveedores');
        $this->load->view('back/footer');
    }

    public function proveedores_info($id)
    {
        $data['proveedor'] = $this->Proveedor->getById($id);
        $data['tituloPagina'] = TituloPagina;
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        $this->load->view('back/proveedores/proveedores_info');
        $this->load->view('back/footer');
    }

    public function registrar()
    {
        if(isset($_POST['nombre']))
        {
            $this->Proveedor->insert();
            echo '<script>alert("Su registro fue procesado con exito.")</script>';
            redirect('administrador/proveedores');
        }

        $data['tituloPagina'] = TituloPagina;
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        $this->load->view('back/proveedores/insertar-proveedor.php');
        $this->load->view('back/footer');
    }

    public function actualizar()
    {
        $data['tituloPagina'] = TituloPagina;
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        //$this->load->view('back/view_home');
        $this->load->view('back/footer');
    }

    public function borrar()
    {

    }
}