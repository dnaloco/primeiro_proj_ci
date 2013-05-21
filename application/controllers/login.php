<?php

if(!defined('BASEPATH')) exit('no direct script access allowed');

class Login extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		
	}
	
	public function index() 
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('usuario', 'usuario', 'trim|strtolower|required');
		$this->form_validation->set_rules('senha', 'Senha', 'trim|strtolower|required');
		
		$this->load->model('usuario_model','usuario');
		$query = $this->usuario->validar_usuario();

		if($this->form_validation->run() == TRUE) {
			if($query) {
				$data = array(
					'usuario' => $this->input->post('usuario'),
					'logado' => TRUE
				);
				$this->session->set_userdata($data);

				redirect('admin');
	
			}
		}

		
		$params = array (
			
		);
		
		$this->layout->render('admin/login');		
	}
}
