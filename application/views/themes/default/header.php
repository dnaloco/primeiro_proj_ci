<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Pulled from http://code.google.com/p/html5shiv/ -->
		<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
		<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
		<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
		<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
		<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
		<meta charset="utf-8" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>Blog Arthur | <?= $title_page; ?></title>
		<meta name="description" content="" />
		<meta name="author" content="arthur" />

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
		<?php 
		echo load_css(
			array(
				'stylesheets/ie.css',
				'stylesheets/print.css',
				'stylesheets/screen.css'	
			)
		);
		?>
	</head>

	<body>
		<!-- Begin of wrapper -->
		<div id="wrapper" class="page">
			<header>
				<div class="col1">LOGO</div>
				<div class="col2">TITULO</div>
				<div class="col3">
				Seja bem vindo 
				<?php 
				if($this->session->userdata('usuario')) {
					echo $this->session->userdata('usuario');
				} else {
					echo "Visitante";
					echo "<br>";
					echo "Faça o seu " . anchor('home/cadastro', 'Cadastro');
				}
				 ?>
	
				</div>
			</header>
