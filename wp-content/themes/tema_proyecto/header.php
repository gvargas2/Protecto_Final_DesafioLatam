<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>La Ñoquería</title>
    <?php wp_head() ?>

		<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
		  <?php wp_nav_menu( array(
		    'theme_location' => 'header-menu',
		    'container_id' => 'navbarResponsive',
		    'container_class' => 'collapse navbarcollapse',
		    'menu_class'  => 'navbar-nav ml-auto',
		  ));
		  ?>
		<?php } ?>

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
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right navbar__links">
		        <li><a href="nosotros.html">Nosotros</a></li>
						<li><a href="filosofia.html">Filosofía</a></li>
						<li><a href="index.html">Compra</a></li>
						<li><a href="contacto.html">Contacto</a></li>
						<li><a href="ayuda.html">Ayuda</a></li>
						<li><a href="galeria.html">Galería</a></li>
		      </ul>
		    </div> <!-- /.navbar-collapse -->
		  </div> <!-- /.container-fluid -->
		</nav>
		<!--FIN BARRA DE NAVEGACIO-->

	</head>
	<body>
