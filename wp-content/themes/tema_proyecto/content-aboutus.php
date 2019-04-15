<!--HEADER CONTACTO.HTML-->
<header>
  <section class="nosotros_header">
    <div class="row" data-aos="fade-up" data-aos-duration="3000">
      <h1 class="text-center nosotros_header__titulo">¡Conócenos!</h1>
      <h3 class="text-center nosotros_header__subtitulo">Queremos que nos conozcas y así poder brindarte el mejor
        servicio & compartir nuestra filosofía contigo</h3>
    </div>
  </section>
</header> <!--FIN HEADER-->

<main class="container nosotros_main">
  <div class="row">
    <?php
      $arg = array(
        'post_type'		 => 'equipo',
        'posts_per_page' => 6
      );
      $get_arg = new WP_Query( $arg );
      while ( $get_arg->have_posts() ) {
        $get_arg->the_post();
      ?>
    <div class="col-md-6">
      <h2 class="nosotros_main__nuevo text-center"><?php the_title(); ?></h2>
      <div class="nosotros_main__texto text-center">
        <?php the_content(); ?>
      </div>
    </div>
    <?php } wp_reset_postdata(); ?>
  </div>

</main><!--FIN MAIN NOSOTROS.HTML-->
