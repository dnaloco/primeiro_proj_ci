<?php

if(!defined('BASEPATH')) exit('no direct script are not allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('array');
		$this->load->helper('assets_helper');
		$this->load->library('form_validation');
		$this->load->model('usuario_model', 'usuario');
		$this->load->library('session');
	}
	
	public function index() {
		$this->layout->set_title('Welcome Home!');
		
		$params = array ();
		
		$layouts = array ();
		
		$this->layout->render('pages/home', $params, $layouts);	
	}
	
	public function sobre() {
		$this->layout->set_title('Sobre Mim');
		
		$params = array ();
		$layouts = array ();
		$this->layout->render('pages/sobre', $params, $layouts);	
	}
	
	public function servicos() {
		$this->layout->set_title('Serviços');
		
		$params = array ();
		
		$layouts = array ();
		$this->layout->render('pages/servicos', $params, $layouts);	
	}
	
	public function cadastro() {
		$this->layout->set_title('Cadastro');
		$this->layout->set_description('Sistema para cadastrar usuários');
		$this->form_validation->set_message('is_unique', 'O %s já está cadastrado.');
		$this->form_validation->set_rules('usuario', 'USUARIO', 'trim|required|strtolower|min_length[6]|max_length[25]|is_unique[login.usuario]');
		$this->form_validation->set_rules('senha', 'SENHA', 'trim|strtolower|required');
		$this->form_validation->set_message('matches', 'O campo %s não corresponde ao campo %s.');
		$this->form_validation->set_rules('senha2', 'REPITA A SENHA', 'trim|strtolower|required|matches[senha]');
		
		if($this->form_validation->run() == TRUE) {
			$dados = elements(array('usuario', 'senha'), $this->input->post());
			$dados['senha'] = md5($dados['senha']);
			$this->usuario->cadastrar_usuario($dados);
		}
		
		
		$params = array ();
		
		$layouts = array ();
		
		$this->layout->render('pages/cadastro', $params, $layouts);	
	}

	public function contato() {
		$this->layout->set_title('Contato');
		
		$params = array ();
		
		$layouts = array ();
		
		$this->layout->render('pages/contato', $params, $layouts);	
	}

	public function deslogar() {
		$this->session->unset_userdata('logado');
		$this->session->unset_userdata('usuario');
		redirect('/', 'refresh');
	}
}
