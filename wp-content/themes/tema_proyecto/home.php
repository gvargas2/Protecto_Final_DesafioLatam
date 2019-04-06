<?php get_header(); ?>

<!--HEADER blog-->
<header>
  <section class="nosotros_header">
    <div class="row" data-aos="fade-up" data-aos-duration="3000">
      <h1 class="text-center nosotros_header__titulo">¡Bienvenido a nuestro Blog!</h1>
      <h3 class="text-center nosotros_header__subtitulo">Acá podrás ponerte al día con
        todas nuestras noticias</h3>
    </div>
  </section>
</header> <!--FIN HEADER-->

<main class="container nosotros_main">
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
      <h2 class="nosotros_main__nuevo text-center"><?php the_title(); ?></h2>
      <div class="  nosotros_main__texto text-center">
        <p>Autor: <?php the_author() ?> | Fecha: <?php the_time() ?> </p>
      </div>
      <div class="nosotros_main__texto text-center">
        <?php the_content(); ?>
      </div>
    </div>
    <?php endwhile; endif; ?>
  </div>
</main><!--FIN MAIN NOSOTROS.HTML-->

<?php get_footer(); ?>
