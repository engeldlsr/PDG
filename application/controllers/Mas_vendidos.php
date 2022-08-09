<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mas_vendidos extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
	}

	public function index()
	{
		// Titulo y descripcion de la pagina mostrada
		$data['tituloPagina'] = 'E&J Music'; // Titulo de pagina mostrada.
		$this->load->model('categoria');
		$data['categorias'] = $this->categoria->findAll();

		$this->load->view('front/header', $data);
		$this->load->view('mas-vendidos');
		$this->load->view('front/footer');
	}

}