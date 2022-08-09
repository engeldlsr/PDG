<?php 

class Clientes extends CI_Controller {

    function construct()
    {
        parent::__construct();
    }

    public function mi_cuenta()
    {
        // Titulo y descripcion de la pagina mostrada
		$data['tituloPagina'] = 'E&J Music'; // Titulo de pagina mostrada.
		$this->load->model('categoria');
		$data['categorias'] = $this->categoria->findAll();

		$this->load->view('front/header', $data);
		$this->load->view('front/mi-cuenta/mi-cuenta');
		$this->load->view('front/footer');
    }

    public function crear_cuenta()
    {
        if(isset($_POST['nombre']))
        {
            $this->load->model("Cliente");
            $this->Cliente->reg_cliente();
        }

        // Titulo y descripcion de la pagina mostrada
		$data['tituloPagina'] = 'E&J Music'; // Titulo de pagina mostrada.
		$this->load->model('categoria');
		$data['categorias'] = $this->categoria->findAll();

		$this->load->view('front/header', $data);
		$this->load->view('front/mi-cuenta/crear-cuenta');
		$this->load->view('front/footer');
    }

    public function login()
    {
        if(isset($_SESSION['cliente']))
        {
            redirect('mi-cuenta');
        }

        if(isset($_POST['email']))
		{
			$email = $_POST['email'];
			$password = $_POST['password'];

            $this->load->model('Cliente');
            $data = $this->Cliente->login($email, $password);

            if($data)
            {
                $this->session->set_userdata('cliente', $data);
                redirect('mi-cuenta');
            }
		}
        

        // Titulo y descripcion de la pagina mostrada
		$data['tituloPagina'] = 'E&J Music'; // Titulo de pagina mostrada.
		$this->load->model('categoria');
		$data['categorias'] = $this->categoria->findAll();

		$this->load->view('front/header', $data);
		$this->load->view('front/mi-cuenta/login');
		$this->load->view('front/footer');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('mi-cuenta/login');
    }

    public function Recuperar_contraseña()
    {
        
    }
}