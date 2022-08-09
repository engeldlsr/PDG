<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buscar extends CI_Controller {

	function __construct()
	{
		parent::__construct();

	}


	public function index()
	{
        if(isset($_GET['s']) && $_GET['s'] !== ""){ 
            // Titulo y descripcion de la pagina mostrada
            $data['tituloPagina'] = 'E&J Music'; // Titulo de pagina mostrada.
            $this->load->model('categoria');
            
            $data['categorias'] = $this->categoria->findAll();
            $this->load->view('front/header', $data);
            
            $this->load->view('front/footer');
        }
        else
        {
            $this->load->model('categoria');
            $this->load->model('Search');

            $data['categorias'] = $this->categoria->findAll();
            $data['search'] = $this->Search->__select('tbl_producto', $_GET['categoria'], 'nombre', $_GET['p']);
            
            // Titulo y descripcion de la pagina mostrada
            $data['tituloPagina'] = 'E&J Music'; // Titulo de pagina mostrada.         

            $this->load->view('front/header', $data);
            $this->load->view('buscar');
            $this->load->view('front/footer');
        }
	}


}