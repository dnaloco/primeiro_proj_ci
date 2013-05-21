<?php

if(!defined('BASEPATH')) exit('no direct script are not allowed');

class Usuario_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function cadastrar_usuario($dados=NULL)
	{
		if($dados!=NULL) 
		{
			$this->db->insert('login', $dados);
			$this->session->set_flashdata('caduser', 'Usuário cadastrado com sucesso!');
			redirect('home/cadastro');
		}
	}
	
	public function validar_usuario()
	{
		$this->db->where('usuario', $this->input->post('usuario'));
		$this->db->where('senha', md5($this->input->post('senha')));
		$query = $this->db->get('login');
		if($query->num_rows == 1) {
			return true;
		}
	}
	
}
