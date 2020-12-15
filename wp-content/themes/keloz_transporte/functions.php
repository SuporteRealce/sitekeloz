<?php 

function cadastro_postagem() {

	// banner
	register_post_type('registro_banner',
		array(
			'labels' => array(
				'name' => __('Mensagem Inicial'),
				'singular_name' => __('Mensagem Inicial'),
				'add_new' => __('Mensagem Inicial'),
				'add_new_item' => __('Mensagem Inicial'),
				'edit_item' => __('Editar Mensagem Inicial')
			),
			'public' => true,
			'has_archive' => true,
			'publicly_queryable' => false,
			'supports' => array('')
		)
	);

	// sobre
	register_post_type('registro_sobre',
		array(
			'labels' => array(
				'name' => __('Sobre Nós'),
				'singular_name' => __('Sobre Nós'),
				'add_new' => __('Sobre Nós'),
				'add_new_item' => __('Sobre Nós'),
				'edit_item' => __('Editar Sobre Nós'),
			),
			'public' => true,
			'has_archive' => true,
			'publicly_queryable' => false,
			'supports' => array('')
		)
	);

	// institucional
	register_post_type('registro_instito',
		array(
			'labels' => array(
				'name' => __('Institucional'),
				'singular_name' => __('Institucional'),
				'add_new' => __('Institucional'),
				'add_new_item' => __('Institucional'),
				'edit_item' => __('Editar Institucional'),
			),
			'public' => true,
			'has_archive' => true,
			'publicly_queryable' => false,
			'supports' => array('')
		)
	);

	// frota
	register_post_type('registro_frota',
		array(
			'labels' => array(
				'name' => __('Frota'),
				'singular_name' => __('Frota'),
				'add_new' => __('Frota'),
				'add_new_item' => __('Frota'),
				'edit_item' => __('Editar Frota'),
			),
			'public' => true,
			'has_archive' => true,
			'publicly_queryable' => false,
			'supports' => array('')
		)
	);

	// contato
	register_post_type('registro_contato',
		array(
			'labels' => array(
				'name' => __('Informações'),
				'singular_name' => __('Informações'),
				'add_new' => __('Informações'),
				'add_new_item' => __('Informações'),
				'edit_item' => __('Editar Informações'),
			),
			'public' => true,
			'has_archive' => true,
			'publicly_queryable' => false,
			'supports' => array('')
		)
	);
}

add_action('init', 'cadastro_postagem');

function custom_sidebar() {
	add_menu_page(
    	'Mensagem inicial',
    	'Mensagem Inicial',
    	'manage_options',
    	home_url().'/wp-admin/post.php?post=68&action=edit',
    	'',
    	'dashicons-welcome-write-blog',
    	6
    );

    add_menu_page(
    	'Sobre Nós',
    	'Sobre Nós',
    	'manage_options',
    	home_url().'/wp-admin/post.php?post=70&action=edit',
    	'',
    	'dashicons-welcome-write-blog',
    	7
    );

    add_menu_page(
    	'Institucional',
    	'Institucional',
    	'manage_options',
    	home_url().'/wp-admin/post.php?post=72&action=edit',
    	'',
    	'dashicons-building',
    	8
    );

    add_menu_page(
    	'Frota',
    	'Frota',
    	'manage_options',
    	home_url().'/wp-admin/post.php?post=74&action=edit',
    	'',
    	'dashicons-archive',
    	9
    );

    add_menu_page(
    	'Informações',
    	'Informações',
    	'manage_options',
    	home_url().'/wp-admin/post.php?post=75&action=edit',
    	'',
    	'dashicons-admin-generic',
    	10
    );
}

add_action('admin_menu', 'custom_sidebar');

function menu_principal_dashboard() {
	add_menu_page(
		'Painel Administrativo',
		'Painel Administrativo',
		'manage_options',
		'my-page',
		'my_menu_render',
		'',
		1
	);
}
add_action('admin_menu', 'menu_principal_dashboard');

function my_menu_render() {
	global $title;
	?>
	
	<h2><?php echo $title; ?></h2>

	<div class="conteudo-menu" style="">
		<div class="conteudo-menu-item" onclick="location.href = '<?php echo home_url(); ?>/wp-admin/post.php?post=68&action=edit';">
			<h1 class="dashicons-before dashicons-welcome-write-blog custom_dash"></h1>
			<a href="#">Mensagem Inicial</a>
		</div>
		<div class="conteudo-menu-item" onclick="location.href = '<?php echo home_url(); ?>/wp-admin/post.php?post=70&action=edit';">
			<h1 class="dashicons-before dashicons-format-aside custom_dash" ></h1>
			<a href="#">Sobre Nós</a>
		</div>
		<div class="conteudo-menu-item" onclick="location.href = '<?php echo home_url(); ?>/wp-admin/post.php?post=72&action=edit';">
			<h1 class="dashicons-before dashicons-building custom_dash"></h1>
			<a href="#">Institucional</a>
		</div>
		<div class="conteudo-menu-item" onclick="location.href = '<?php echo home_url(); ?>/wp-admin/post.php?post=74&action=edit';">
			<h1 class="dashicons-before dashicons-archive custom_dash"></h1>
			<a href="#">Frota</a>
		</div>
	</div>

	<div class="conteudo-menu" style="">
		<div class="conteudo-menu-item" onclick="location.href = '<?php echo home_url(); ?>/wp-admin/post.php?post=75&action=edit';">
			<h1 class="dashicons-before dashicons-admin-generic custom_dash"></h1>
			<a href="#">Insformações</a>
		</div>
		<div class="conteudo-menu-item" style="opacity: 0;">
			<h1 class="dashicons-before dashicons-admin-post custom_dash" ></h1>
			<a href="#">Blog</a>
		</div>
		<div class="conteudo-menu-item" style="opacity: 0;">
			<h1 class="dashicons-before dashicons-admin-tools custom_dash"></h1>
			<a href="#">Informações</a>
		</div>
		<div class="conteudo-menu-item" style="opacity: 0;">
			<h1 class="dashicons-before dashicons-images-alt custom_dash"></h1>
			<a href="#">Galeria de Fotos</a>
		</div>
	</div>

	<style>
		.conteudo-menu {
			width: 100%; 
			margin: 10px auto; 
			display: flex; 
			flex-direction: row;
		}
		.conteudo-menu-item {
			width: 20%;
			display: flex; 
			margin: 10px auto; 
			height: 200px; 
			background-color: white; 
			border-radius: 10px; 
			text-align: center; 
			flex-direction: column; 
			justify-content: center;
			-webkit-box-shadow: 0px 0px 32px 10px rgba(57,57,57,0.05);
			-moz-box-shadow: 0px 0px 32px 10px rgba(57,57,57,0.05);
			box-shadow: 0px 0px 32px 10px rgba(57,57,57,0.05);
			padding: 0px 10px;
			position: relative;
		}
		.conteudo-menu-item h1 {
			font-size: 40px; height: 30px;
		}
		.conteudo-menu-item a {
			font-weight: 600; 
			font-size: 20px; 
			color: black; 
			text-decoration: none;
			line-height: 24px;
		}
		.conteudo-menu-item:hover {
			transition: .3s;
			-webkit-box-shadow: 0px 0px 32px 10px rgba(57,57,57,0.2);
			-moz-box-shadow: 0px 0px 32px 10px rgba(57,57,57,0.2);
			box-shadow: 0px 0px 32px 10px rgba(57,57,57,0.2);
			background-color: #ec3237;
			cursor: pointer;
		}
		.conteudo-menu-item:hover h1, .conteudo-menu-item:hover a {
			color: white;
		}
		.conteudo-menu .dashicons-before:before {
			font-size: 40px !important;
			width: 40px !important;
			height: 40px !important;
		}
	</style>

	<?php
}