<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->model('Productos');
		$data['ultimosProductos'] = $this->Productos->ultimosProductos(5);
		$data['guitars'] = $this->Productos->__select('tbl_producto', 'id_categoria', 10, 3);
		$data['speakers'] = $this->Productos->__select('tbl_producto', 'id_categoria', 12, 3);
		$data['accesories'] = $this->Productos->__select('tbl_producto', 'id_categoria', 14, 3);
		$data['percusiones'] = $this->Productos->__select('tbl_producto', 'id_categoria', 16, 5);

		// Titulo y descripcion de la pagina mostrada
		$data['tituloPagina'] = 'E&J Music'; // Titulo de pagina mostrada.
		$this->load->model('categoria');
		$data['categorias'] = $this->categoria->findAll();

		$this->load->view('front/header', $data);
		$this->load->view('home');
		$this->load->view('front/footer');
	}

	public function instrumentos_de_cuerdas()
	{
		// Titulo y descripcion de la pagina mostrada
		$data['tituloPagina'] = 'E&J Music'; // Titulo de pagina mostrada.
		$this->load->model('categoria');
		$this->load->model('Productos');

		$data['categorias'] = $this->categoria->findAll();
		$data['items'] = $this->Productos->__select('tbl_producto', 'id_categoria', '10');

		$this->load->view('front/header', $data);
		$this->load->view('instrumentos-de-cuerdas', $data);
		$this->load->view('front/footer');
	}

	public function bocinas_y_accesorios()
	{
		// Titulo y descripcion de la pagina mostrada
		$data['tituloPagina'] = 'E&J Music'; // Titulo de pagina mostrada.
		$this->load->model('categoria');
		$this->load->model('Productos');

		$data['categorias'] = $this->categoria->muestra_por_grupo();
		$data['items'] = $this->Productos->__select('tbl_producto', 'id_categoria', '12');
		//$data['items'] = $this->categoria->muestra_por_grupo();

		$this->load->view('front/header', $data);
		$this->load->view('front/bocinas_y_accesorios', $data);
		$this->load->view('front/footer');
	}

	public function equipos_de_sonido()
	{
		// Titulo y descripcion de la pagina mostrada
		$data['tituloPagina'] = 'E&J Music'; // Titulo de pagina mostrada.
		$this->load->model('categoria');
		$this->load->model('Productos');

		$data['categorias'] = $this->categoria->findAll();
		$data['items'] = $this->Productos->__select('tbl_producto', 'id_categoria', 15);

		$this->load->view('front/header', $data);
		$this->load->view('equipos-de-sonidos', $data);
		$this->load->view('front/footer');
	}

	public function detalle_del_producto($id)
	{
		// Titulo y descripcion de la pagina mostrada
		$data['tituloPagina'] = 'E&J Music'; // Titulo de pagina mostrada.
		$this->load->model('categoria');
		$this->load->model('Productos');

		$data['categorias'] = $this->categoria->findAll();
		$data['detalleProducto'] = $this->Productos->selectById($id);

		$this->load->view('front/header', $data);
		$this->load->view('front/detalle-producto', $data);
		$this->load->view('front/footer');
	}

	public function buy()
	{
		$this->load->model('Productos');

		//Set variables for paypal form
		$paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //test PayPal api url
		$paypalID = 'webhostrd@gmail.com'; //business email
		$returnURL = base_url('') . 'paypal/success'; //payment success url
		$cancelURL = base_url() . 'paypal/cancel'; //payment cancel url
		$notifyURL = base_url() . 'paypal/ipn'; //ipn url
		//get particular product data
		$product = $this->Productos->getRows(2);
		$userID = 1; //current user id
		$logo = base_url() . 'assets/images/logo.png';
		$this->paypal_lib->add_field('business', $paypalID);
		$this->paypal_lib->add_field('return', $returnURL);
		$this->paypal_lib->add_field('cancel_return', $cancelURL);
		$this->paypal_lib->add_field('notify_url', $notifyURL);
		$this->paypal_lib->add_field('item_name', $product->nombre);
		$this->paypal_lib->add_field('custom', $userID);
		$this->paypal_lib->add_field('description', '$userID');
		$this->paypal_lib->add_field('item_number', $product->id_producto);
		$this->paypal_lib->add_field('amount', $product->precio);
		$this->paypal_lib->image($logo);

		$this->paypal_lib->paypal_auto_form();
	}

}