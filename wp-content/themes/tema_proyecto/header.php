<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>La Ñoquería</title>
    <?php wp_head() ?>

    <!--BARRA DE NAVEGACION-->
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">LA NOQUERÍA</a>
		    </div>
				<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
					<?php wp_nav_menu( array(
						'theme_location' 	=> 'header-menu',
						'container_id'		=> 'navbarResponsive',
						'container_class' 	=> 'collapse navbar-collapse',
						'menu_class'     	=> 'navbar-nav ml-auto'
						)
					); ?>
				<?php } ?>
		  </div> <!-- /.container-fluid -->
		</nav>
		<!--FIN BARRA DE NAVEGACIO-->

	</head>
	<body>
