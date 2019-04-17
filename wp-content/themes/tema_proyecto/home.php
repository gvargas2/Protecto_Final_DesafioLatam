<?php get_header(); ?>

<!--HEADER blog-->
<header>
  <section class="blog_header">
    <div class="row" data-aos="fade-up" data-aos-duration="3000">
      <h1 class="text-center nosotros_header__titulo">¡Bienvenido a nuestro Blog!</h1>
      <h3 class="text-center nosotros_header__subtitulo">Acá podrás ponerte al día con
        todas nuestras noticias</h3>
    </div>
  </section>
</header> <!--FIN HEADER-->

<main class="container blog_main">
  <div class="row">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  		<?php
  		if ( has_post_thumbnail() ) {
  		  $img = get_the_post_thumbnail_url('', 'post-custom-size');
  		} else {
  		  $img = get_template_directory_uri() . '/assets/img/brooke-lark-609900-unsplash-400x300.jpg';
  		}
  		?>
    <div class="col-md-6">
      <h2 class="blog_main__nuevo text-center"><?php the_title(); ?></h2>
      <div class="  blog_main__texto text-center">
        <p>Autor: <?php the_author() ?> | Fecha: <?php the_time() ?> </p>
      </div>
      <div class="nosotros_main__texto text-center">
        <?php the_content(); ?>
      </div>
    </div>
    <?php endwhile; endif; ?>
  </div>
</main><!--FIN MAIN NOSOTROS.HTML-->

<div class="consumoapi">
  <div class="row api_header">
    <h1 class="text-center titulo_api" data-aos="fade-up" data-aos-duration="3000">Cultura La Ñoquería</h1>
    <p class="text-center texto_api" data-aos="fade-up" data-aos-duration="3000">Te invitamos a conocer la colección de imagenes de seleccionamos para ti en UnSplash. Una colección que nos representa.</p>
  </div>
  <div class="row sin_margen">
    <div class="gallery">

    </div>
  </div>
</div>

<?php get_footer(); ?>
