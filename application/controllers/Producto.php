<?php
include_once('config.php');
class Producto extends WH_Controller {

    function __construct()
    {
        parent::__construct();

        if( !preg_match('/(administrador)/', current_url() ) )
        {
            redirect('home');
        }
    }

    public function info_producto($id)
    {
        $data['tituloPagina'] = TituloPagina;
        $this->load->view('back/header', $data);

        $this->load->model('Productos');
        $data['producto'] = $this->Productos->selectById($id);

        $this->load->view('back/sidebar');
        $this->load->view('back/productos/detalle-producto', $data);
        $this->load->view('back/footer');
    }

    public function update($id)
    {
        $data['tituloPagina'] = TituloPagina;
        $this->load->view('back/header', $data);

        $this->load->model('Productos');
        $data['producto'] = $this->Productos->selectById($id);
        $this->load->view('back/sidebar');
        $this->load->view('back/productos/edit-producto', $data);
        $this->load->view('back/footer');
    }

    public function delete($id)
    {

    }
}