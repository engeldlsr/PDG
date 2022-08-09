<?php
include_once('config.php');
class Category extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        if( !preg_match('/administrador/', current_url() ) )
        {
            redirect('home');
        }
    }

    public function categorias()
    {
        $data['tituloPagina'] = TituloPagina;
        // Cargo el modelo de Categorias
        $this->load->model('categoria'); // Cargo el modelo Categoria

        $data['category'] = $this->categoria->showAll();

        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        $this->load->view('back/categoria/category');
        $this->load->view('back/footer');
    }

    public function publicar()
    {
        $this->load->model('Categoria');
        $data['subCategoria'] = $this->Categoria->subCategoria();

        if(isset($_POST['nombre']))
        {
            $this->Categoria->insert();
            redirect('administrador/categorias');
        }

        $data['tituloPagina'] = TituloPagina;
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        $this->load->view('back/categoria/insert.php');
        $this->load->view('back/footer');
    }

    public function info($id)
    {
        $this->load->model('Categoria');
        $data['subCategoria'] = $this->Categoria->subCategoria();

        $data['tituloPagina'] = TituloPagina;
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        $this->load->view('back/categoria/info.php');
        $this->load->view('back/footer');
    }

    public function editar($id)
    {
        $this->load->model('Categoria');

        if(isset($_POST['nombre']))
        {
            $this->Categoria->updateCatategoria();
            redirect('');
        }
        
        $data['categoria'] = $this->Categoria->find($id);
        
        $data['subCategoria'] = $this->Categoria->subCategoria();
        $data['tituloPagina'] = TituloPagina;
        $this->load->view('back/header', $data);
        $this->load->view('back/sidebar');
        $this->load->view('back/categoria/edit.php');
        $this->load->view('back/footer');
    }

    public function borrar($id)
    {
        
    }

    public function update()
    {
        if(isset($_POST['nombre']))
        {
            $this->load->model('Categoria');
            $this->Categoria->updateCatategoria($_POST['id']);
            redirect('administrador/categorias');
        }
    }
}