<?php 

class Carrito extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function carrito()
    {
        // Titulo y descripcion de la pagina mostrada
		$data['tituloPagina'] = 'E&J Music'; // Titulo de pagina mostrada.
		
        $this->load->model('categoria');
		
        $data['categorias'] = $this->categoria->findAll();

		$this->load->view('front/header', $data);
		$this->load->view('carrito');
		$this->load->view('front/footer');
    }

    public function realizar_pago()
    {
        // Titulo y descripcion de la pagina mostrada
		$data['tituloPagina'] = 'E&J Music'; // Titulo de pagina mostrada.
		$this->load->model('categoria');
		$data['categorias'] = $this->categoria->findAll();

		$this->load->view('front/header', $data);
		$this->load->view('front/carrito/realizar-pago');
		$this->load->view('front/footer');
    }


    // Insertar items en el carrito
    public function cart_insert()
    {
        $data = array(
            'id' => $this->input->post('id'),
            'qty' => intval($this->input->post('qty')),
            'price' => intval($this->input->post('price')),
            'name' => $this->input->post('name')
        );

        $this->cart->insert($data);
       // var_dump($data);
        redirect('carrito');
    }

    public function cart_update()
    {
        $data = $this->input->post();
        $this->cart->update($data);
        redirect('carrito');
   
    }

    public function cart_delete()
    {
        $this->cart->destroy();
        redirect('carrito');
    }
}