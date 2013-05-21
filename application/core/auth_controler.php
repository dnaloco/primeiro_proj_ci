<?php

if(!defined('BASEPATH')) exit('no direct script are not allowed');

class Auth_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		if(!$this->session->userdata('logado'))
		{
			redirect('login');
		}
	} 
}
