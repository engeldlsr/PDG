<?php
include_once('config.php');

class Administrador extends CI_Controller {

    public $user_foto;

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');

        if($this->session->userdata('user'))
        {
            $data['tituloPagina'] = TituloPagina;
        }
        else 
        {
            redirect('login');
        }
    }

    public function index()
    {
        $this->load->model('Ventas'); // Modelo Ventas
        $this->load->model('Cliente'); // Modelo Clientes
        
        $data['numClientes'] = $this->Cliente->numTotalClientesRegistrados();
        $data['ventas7Dias'] = $this->Ventas->reporte_de_ventas_ultimos_7_dias();
        $data['ventasXClientes'] = $this->Ventas->estadoVenta();
        
        $data['tituloPagina'] = TituloPagina;
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        $this->load->view('back/escritorio');
        $this->load->view('back/footer');
    }

    public function perfil()
    {
        //var_dump($this->session->userdata('user'));
        //exit;
        $data['user'] = $this->session->userdata('user');
        $data['tituloPagina'] = TituloPagina;
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        $this->load->view('back/perfil');
        $this->load->view('back/footer');
    }

    //Usuarios
    public function mostrar_usuarios()
    {
        $data['tituloPagina'] = TituloPagina;

        // Cargo el modelo de usuario...
        $this->load->model('Usuario');
        
        $users = $this->Usuario->findUser();
        $data['users'] = $users;

        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        $this->load->view('back/usuarios/findUser');
        $this->load->view('back/footer');
    }

    public function info_usuario()
    {
        $data['tituloPagina'] = TituloPagina;

        // Cargo el modelo de usuario...
        $this->load->model('Usuario');
        
        $user = $this->Usuario->findUserById($_GET['id']);
        $data['user'] = $user;

        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        $this->load->view('back/usuarios/info-user');
        $this->load->view('back/footer');
    }

    public function registrar_usuario()
    {
        $data['tituloPagina'] = TituloPagina;
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        $this->load->view('back/usuarios/create-user');
        $this->load->view('back/footer');
    }

    public function reg_usuario()
    {
        $this->load->model('Usuario');
        
        $this->Usuario->reg_user();
        redirect('administrador/mostrar-usuarios');
    }

    public function editar_usuario($id)
    {
        $this->load->model('Usuario');
        
        $data['editUser'] = $this->Usuario->findUserById($id);
        
        $data['tituloPagina'] = TituloPagina;
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        $this->load->view('back/usuarios/editar-usuario');
        $this->load->view('back/footer');
    }

    public function updateUser()
    {   
        $this->load->model('Usuario');
        
        if(isset($_POST['nombre']))
        {
            $this->Usuario->actualizar($id);
            redirect('administrador/mostrar-usuarios');
        }
    }

    public function borrar_usuario()
    {
        $this->load->model("Usuario");
        
        $this->Usuario->borrar($_GET['id']);
        redirect('administrador/mostrar-usuarios');
    }

    // PRODUCTOS

    public function mostrar_productos()
    {
        $data['tituloPagina'] = TituloPagina;
        $this->load->view('back/header', $data);

        $this->load->model('Productos');
        $data['productos'] = $this->Productos->listar_productos();

        $this->load->view('back/sidebar');
        $this->load->view('back/productos/mostrar-productos', $data);
        $this->load->view('back/footer');
    }

    public function registrar_producto()
    {
        $this->load->model('Productos');
        $this->load->model('categoria');
       
        if(isset($_POST['nombre']))
        {
            $this->Productos->insert();
            redirect('administrador/mostrar-productos');
        }
        
        $data['tituloPagina'] = TituloPagina;
        $this->load->view('back/header', $data);
        $data['categoria'] = $this->categoria->findAll();
        $this->load->view('back/sidebar');
        $this->load->view('back/productos/registrar-producto', $data);
        $this->load->view('back/footer');
    }

    public function actualizar_productos()
    {
        $data['tituloPagina'] = TituloPagina;
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        //$this->load->view('back/view_home');
        $this->load->view('back/footer');
    }

    public function borrar_productos()
    {
        $data['tituloPagina'] = TituloPagina;
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        //$this->load->view('back/view_home');
        $this->load->view('back/footer');
    }

    // Clientes
    public function mostrar_clientes()
    {
        $this->load->model('Cliente');
        $data['clientes'] = $this->Cliente->mostrarClientes();

        $data['tituloPagina'] = TituloPagina;
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        $this->load->view('back/clientes/mostrar-clientes');
        $this->load->view('back/footer');
    }

    public function info_cliente()
    {
        $this->load->model('Cliente');
        $data['detalleCliente'] = $this->Cliente->mostrarClientes();

        $data['tituloPagina'] = TituloPagina;
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        $this->load->view('back/clientes/info-cliente');
        $this->load->view('back/footer');
    }

    public function registrar_cliente()
    {
        if(isset($_POST['nombre']))
        {
            $this->load->model('Cliente');
            $this->Cliente->reg_cliente();

            //redirect('administrador/mostrar-clientes');
        }

        $data['tituloPagina'] = TituloPagina;
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        $this->load->view('back/clientes/registrar-cliente.php');
        $this->load->view('back/footer');
    }

    public function actualizar_cliente()
    {
        $data['tituloPagina'] = TituloPagina;
        
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        //$this->load->view('back/view_home');
        $this->load->view('back/footer');
    }

    public function borrar_cliente()
    {
        $data['tituloPagina'] = TituloPagina;
        
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        //$this->load->view('back/view_home');
        $this->load->view('back/footer');
    }

    public function actualzar_categoria($id)
    {
        $data['tituloPagina'] = TituloPagina;
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        //$this->load->view('back/view_home');
        $this->load->view('back/footer');
    }

    public function borrar_categoria($id)
    {
        $data['tituloPagina'] = TituloPagina;
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        //$this->load->view('back/view_home');
        $this->load->view('back/footer');
    }


    // Ventas
    public function compra_estado()
    {
        if(!isset($_GET['id_compra']))
        {
            redirect('administrador');
        }
        $this->load->model('Ventas');
        $data['tituloPagina'] = TituloPagina;
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        //$this->load->view('back/view_home');
        $this->load->view('back/footer');

    }

    // Reportes
    public function reportes()
    {
        $this->load->model("Ventas");
        $data['reporteVentas'] = $this->Ventas->reporteDeVentas();

        $data['tituloPagina'] = TituloPagina;
        $this->load->view('back/header', $data);

        $this->load->view('back/sidebar');
        $this->load->view('back/reporte');
        $this->load->view('back/footer');
        $this->load->view('back/inc/dataReport', $data);
    }

    // Informacion del sistema
    public function info_sistema()
    {
        $data['tituloPagina'] = TituloPagina;
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        $this->load->view('back/info-sistema');
        $this->load->view('back/footer');

    }
}