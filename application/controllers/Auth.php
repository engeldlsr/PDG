<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends WH_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('User_model');
	}

	public function index()
	{

		if(isset($_SESSION['user']))
		{
			redirect('administrador');
		}
		else
		{

			$data['tituloPagina'] = "E&J Music - Login";
			$this->load->view('back/login', $data);
		}

	}

	public function login()
	{
		if(isset($_POST['user']))
		{
			$user = $_POST['user'];
			$password = sha1($_POST['password']);
		}

		$data = $this->User_model->login($user, $password);

		if($data)
		{
			$this->session->set_userdata('user', $data);
			redirect('administrador');
		}
		else{
			
			redirect('auth');
		}

	}

	public function logout()
	{
		$this->session->unset_userdata('user');
		redirect('login?logout=yes');
	}
}