<?php

if(!defined('BASEPATH')) exit('no direct script access are allowed');

class Servico extends CI_Controller
{
	public function index() {
		echo "wait";	
	}
	
	public function manutencao()
	{
		$this->layout->set_title('Manutenção de Micros');
		
		$params = array ();
		
		$layouts = array ();
		
		$this->layout->render('pages/servicos/manutencao', $params, $layouts);		
	}
	
	public function criacaosites()
	{
		$this->layout->set_title('Criação de Sites');
		
		$params = array ();
		
		$layouts = array ();
		
		$this->layout->render('pages/servicos/criacao', $params, $layouts);		
	}
	
	public function seosites()
	{
		$this->layout->set_title('Seo de Sites');
		
		$params = array ();
		
		$layouts = array ();
		
		$this->layout->render('pages/servicos/seo', $params, $layouts);		
	}
}
