<?php

if(!defined('BASEPATH')) exit('no direct script access allowed');

class Admin extends CI_Controller {
	public function __construct() {
		parent::__construct();	
		if(!$this->session->userdata('logado'))
		{
			$this->session->set_flashdata('logar', 'Usuário precisa estar logado para acessar esta área.');
			redirect('login');
		}
	}
	
	public function index() {
		$this->layout->set_title('Área Restrita');
		
		$params = array ();
		
		$layouts = array ();
		
		$this->layout->render('admin/admin', $params, $layouts);	
	}
	
	public function gerenciar() {
		
	}
}
