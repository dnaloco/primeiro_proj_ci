<?php

if($this->session->flashdata('logar')):
	echo $this->session->flashdata('logar');
endif;

echo validation_errors();
echo form_open('login');
echo form_label('Usuario:');
echo form_input(array('name'=>'usuario'), set_value('usuario'), 'autofocus');
echo form_label('Senha:');
echo form_password(array('name'=>'senha'));
echo form_submit(array('name'=>'logar', 'value'=>'Logar'));
echo form_close();
