<?php
class Error404 extends CI_Controller {

    public $title_w = "E&J Music";
    public $des_w = "P&aacute;gina no encontrada.";
    public $c='';
    
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $data['tituloPagina'] = $this->title_w;
        $data['descPagina'] = $this->des_w;

        $this->load->view('front/header', $data);
        $this->load->view('404');
        $this->load->view('front/footer');
    }
}