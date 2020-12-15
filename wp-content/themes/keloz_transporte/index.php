<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Keloz Tranportes - Agilidade é o nosso forte</title>

	<!-- links -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/estilo.css">
	<?php wp_head(); ?>
</head>
<body>

	<!-- header -->
	<?php 
		query_posts('post_type=registro_banner');
		if(have_posts()): while(have_posts()): the_post();
		if(have_rows('grupo_banner')): while(have_rows('grupo_banner')): the_row();
		$imagem_banner = get_sub_field('imagem_banner');
	?>
	<header id="header" style="background-image: url(<?php echo $imagem_banner['url']; ?>);">
	<?php
		endwhile; endif;
		endwhile; endif; wp_reset_query();
	 ?>
		<!-- nav -->
		<div class="nav">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<div class="conteudo-nav">
							<a href="index.html">
								<img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="Keloz Tranportes - Agilidade || transportadora || envio de mercadoria || envio de compra online || transporte">
							</a>
						</div>
					</div>
					<div class="col-md-8">
						<div class="conteudo-nav">
							<ul>
								<li><a href="#header" class="scroll">Página Inicial</a></li>
								<li><a href="#empresa" class="scroll">Sobre Nós</a></li>
								<li><a href="#institucional" class="scroll">Institucional</a></li>
								<li><a href="#frota" class="scroll">Frota</a></li>
								<li><a href="#contato" class="scroll">Fale Conosco</a></li>
								<li><a href="#rastrear" class="scroll">Rastrear Encomenda</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-2">
						<div class="conteudo-nav">
							<ul class="social">
								<?php  
									query_posts('post_type=registro_contato');
									if(have_posts()): while(have_posts()): the_post();
									if(have_rows('grupo_contato')): while(have_rows('grupo_contato')): the_row();
								?>
								<li><a href="<?php the_sub_field('facebook_contato'); ?>" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
								<li><a href="<?php the_sub_field('instagram_contato'); ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
								<?php 
									endwhile; endif;
									endwhile; endif; wp_reset_query();
								?>
							</ul>
						</div>
					</div>
				</div>
				<hr>
			</div>
		</div>

		<!-- nav responsive -->
		<div class="nav-responsive">
			<div class="container">
				<div class="row">
					<div class="col-6">
						<div class="conteudo-nav-responsive">
							<a href="index.html">
								<img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="Keloz Tranportes - Agilidade || transportadora || envio de mercadoria || envio de compra online || transporte">
							</a>
						</div>
					</div>
					<div class="col-6">
						<div class="conteudo-nav-responsive">
							<div class="btn-nav">
								<span></span>
							</div>
						</div>
					</div>
					<div class="col-12">
						<div>
							<ul>
								<li><a href="#header" class="scroll">Página Inicial</a></li>
								<li><a href="#empresa" class="scroll">Sobre Nós</a></li>
								<li><a href="#institucional" class="scroll">Institucional</a></li>
								<li><a href="#frota" class="scroll">Frota</a></li>
								<li><a href="#contato" class="scroll">Fale Conosco</a></li>
								<li><a href="#rastrear" class="scroll">Rastrear Encomenda</a></li>
							</ul>
						</div>
					</div>
					<div class="col-12">
						<div>
							<ul class="social-responsive">
								<li><a href="#" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- texto banner -->
		<?php 
			query_posts('post_type=registro_banner');
			if(have_posts()): while(have_posts()): the_post();
			if(have_rows('grupo_banner')): while(have_rows('grupo_banner')): the_row();
			$imagem_banner = get_sub_field('imagem_banner');
		?>
		<div class="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<div class="conteudo-banner">
							<h3><?php the_sub_field('slug_banner'); ?></h3>
							<h1><?php the_sub_field('titulo_banner'); ?></h1>
							<?php the_sub_field('frase_banner'); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="background-banner"></div>
		</div>
		<?php
			endwhile; endif;
			endwhile; endif; wp_reset_query();
	 	?>
	</header>
	<!-- /header -->

	<!-- rastrear -->
	<div class="rastrear" id="rastrear">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="conteudo-rastrear">
						<h1>Rastrear encomenda</h1>
						<div class="row">
							<div class="col-md-6">
								<form> 
								<div class="conteudo-rastrear-input">
									<input type="text" placeholder="Digite o cpf/cnpj do destinatário">
								</div>
							</div>
							<div class="col-md-6">
								<div class="conteudo-rastrear-input">
									<input type="text" placeholder="Digite a nota físcal">
								</div>
							</div>
							<div class="col-md-12">
								<div class="conteudo-rastrear-input">
									<input type="submit" value="Procurar">
								</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /rastrear -->

	<!-- empresa -->
	<?php  
		query_posts('post_type=registro_sobre');
		if(have_posts()): while(have_posts()): the_post();
		if(have_rows('grupo_sobre')): while(have_rows('grupo_sobre')): the_row();
		$imagem_empresa = get_sub_field('imagem_sobre');
	?>
	<div class="empresa" id="empresa">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="conteudo-empresa">
						<h3><?php the_sub_field('slug_sobre'); ?></h3>
						<h1><?php the_sub_field('titulo_sobre'); ?></h1>
						<?php the_sub_field('texto_sobre'); ?>
					</div>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-6">
					<div class="conteudo-empresa">
						<div class="background-empresa" style="background-image: url('<?php echo $imagem_empresa['url']; ?>');"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php  
		endwhile; endif;
		endwhile; endif; wp_reset_query();
	?>
	<!-- /empresa -->

	<!-- institucional -->
	<?php  
		query_posts('post_type=registro_instito');
		if(have_posts()): while(have_posts()): the_post();
		if(have_rows('grupo_institucional')): while(have_rows('grupo_institucional')): the_row();
		$imagem_institucional = get_sub_field('imagem_institucional');
	?>
	<div class="institucional" id="institucional">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="bloco-institucional">
						<div class="bloco-institucional-header">
							<div class="bloco-institucional-icone">
								<img src="<?php bloginfo('template_url'); ?>/img/icone_bandeira.png" alt="Keloz Tranportes - Agilidade || transportadora || envio de mercadoria || envio de compra online || transporte">
							</div>
							<div class="bloco-institucional-titulo">
								<h1>Missão</h1>
							</div>
						</div>
						<div class="bloco-institucional-texto">	
							<p><?php the_sub_field('missao_institucional'); ?></p>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="bloco-institucional">
						<div class="bloco-institucional-header">
							<div class="bloco-institucional-icone">
								<img src="<?php bloginfo('template_url'); ?>/img/icone_visao.png" alt="Keloz Tranportes - Agilidade || transportadora || envio de mercadoria || envio de compra online || transporte">
							</div>
							<div class="bloco-institucional-titulo">
								<h1>Visão</h1>
							</div>
						</div>
						<div class="bloco-institucional-texto">	
							<p><?php the_sub_field('visao_institucional'); ?></p>
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<div class="background-institucional">
						<div class="box-institucional" style="background-image: url('<?php echo $imagem_institucional['url']; ?>');"></div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="bloco-institucional">
						<div class="bloco-institucional-header">
							<div class="bloco-institucional-icone">
								<img src="<?php bloginfo('template_url'); ?>/img/icone_estrela.png" alt="Keloz Tranportes - Agilidade || transportadora || envio de mercadoria || envio de compra online || transporte">
							</div>
							<div class="bloco-institucional-titulo">
								<h1>Valores</h1>
							</div>
						</div>
						<div class="bloco-institucional-texto">	
							<p><?php the_sub_field('valor_institucional'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
	<?php 
		endwhile; endif;
		endwhile; endif; wp_reset_query();
	?>
	<!-- /institucional -->

	<!-- frota -->
	<?php  
		query_posts('post_type=registro_frota');
		if(have_posts()): while(have_posts()): the_post();
	?>
	<div class="frota" id="frota">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php
						if(have_rows('grupo_frota')): while(have_rows('grupo_frota')): the_row(); 
					?>
					<div class="titulo-frota">
						<h1><?php the_sub_field('titulo_frota'); ?></h1>
						<hr>
						<p><?php the_sub_field('texto_frota'); ?></p>
					</div>
					<?php endwhile; endif; ?>
					<div class="conteudo-frota">
						<?php 
							if(have_rows('grupo_veiculo')): while(have_rows('grupo_veiculo')): the_row(); 
							if(have_rows('repetidor_veiculo')): while(have_rows('repetidor_veiculo')): the_row(); 
						?>
						<div class="bloco-frota">
							<p><?php the_sub_field('veiculo_frota'); ?></p>
						</div>
						<?php
							endwhile; endif; 
							endwhile; endif; 
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="background-frota"></div>
	</div>
	<?php endwhile; endif; wp_reset_query(); ?>
	<!-- /frota -->

	<!-- contato -->
	<div class="contato" id="contato">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="conteudo-contato">
						<h1>Entre em contato</h1>
					</div>
				</div>
				<div class="col-md-6">
					<div class="conteudo-contato">
						<div class="row">
							<?php  
								query_posts('post_type=post');
								if(have_posts()): while(have_posts()): the_post();
								the_content();
								endwhile; endif; wp_reset_query();
							?>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<?php  
						query_posts('post_type=registro_contato');
						if(have_posts()): while(have_posts()): the_post();
						if(have_rows('grupo_contato')): while(have_rows('grupo_contato')): the_row();
					?>
					<div class="conteudo-contato-formulario">
						<div class="row">
							<div class="col-md-6">
								<h3>Onde estamos?</h3>
								<p><?php the_sub_field('endereco_contato'); ?></p>
							</div>
							<div class="col-md-6">
								<h3>Telefones:</h3>
								<p><?php the_sub_field('telefone_contato'); ?></p>
								<p><?php the_sub_field('whatsapp_contato'); ?></p>
							</div>
							<div class="col-md-12">
								<h3>E-mail:</h3>
								<p><?php the_sub_field('email_contato'); ?></p>
							</div>
							<div class="col-md-12">
								<h3>Social:</h3>
								<a href="<?php the_sub_field('facebook_contato'); ?>" target="_blank"><i class="fa fa-facebook-square"></i></a>
								<a href="<?php the_sub_field('instagram_contato'); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
					</div>
					<?php  
						endwhile; endif;
						endwhile; endif; wp_reset_query();
					?>
				</div>
			</div>
		</div>
	</div>
	<!-- /contato -->

	<!-- footer -->
	<footer id="footer">
		<div class="container">
			<div class="col-md-12">
				<p><i class="fa fa-copyright"></i> Copyright - Todos os direitos estão reservados para Keloz Transporte. Feito por <a href="www.realcetecnologia.com.br" target="_blank">Realce Tecnologia.</a></p>
			</div>
		</div>
	</footer>
	<!-- /footer -->

	<!-- scripts -->
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/meu.js"></script>
	<?php wp_footer(); ?>
</body>
</html>