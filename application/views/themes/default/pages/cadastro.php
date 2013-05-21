<?php
if(!$this->session->flashdata('caduser')):
	echo validation_errors("<p>","</p>");
	echo form_open('home/cadastro', '');
	echo form_label('Login:');
	echo form_input(array('name'=>'usuario'), set_value('usuario'), 'autofocus');
	echo form_label('Senha:');
	echo form_password(array('name'=>'senha'));
	echo form_label('Repetir Senha:');
	echo form_password(array('name'=>'senha2'));
	echo form_submit(array('name'=>'cadastrar', 'value' => 'Cadastrar'));
	echo form_close();	
endif;

echo "<p>", $this->session->flashdata('caduser') . "</p>";