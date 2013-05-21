<nav class="navbar">
	<?php echo index_page(); ?>
	<ul id="main-menu">
		<li class="menu-item"><?= anchor('', 'Home') ?></li>
		<li class="menu-item"><?= anchor('home/sobre', 'Sobre') ?></li>
		<li class="menu-item"><?= anchor('home/servicos', 'Serviços') ?>
			<ul>
				<li class="submenu-item"><?= anchor('servico/manutencao', 'Manutenção de Micros') ?></li>
				<li class="submenu-item"><?= anchor('servico/criacaosites', 'Criação de Sites') ?></li>
				<li class="submenu-item"><?= anchor('servico/seosites', 'Seo de Sites') ?></li>
			</ul>
		</li>
		<li class="menu-item"><?= anchor('home/cadastro', 'Cadastro') ?></li>
		<li class="menu-item"><?= anchor('home/contato', 'Contato') ?></li>
		<li class="menu-item"><?= anchor('login', 'Logar') ?></li>
		<li class="menu-item"><?= anchor('home/deslogar', 'Sair') ?></li>
		<li class="menu-item"><?= anchor('admin', 'Admin') ?></li>
	</ul>
</nav>