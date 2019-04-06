<!--HEADER CONTACTO.HTML-->
<header>
  <section class="filosofia_header">
    <div class="row" data-aos="fade-up" data-aos-duration="3000">
      <div class="col-md-12">
        <h1 class="text-center filosofia_header__titulo">Nuestra Filosofía</h1>
        <h3 class="text-center filosofia_header__subtitulo">Para nosotros es importantísimo compartir contigo nuestra filosofía de
          vida, la cual consta de diferentes elementos, los cuales nos hacen únicos</h3>
      </div>
    </div>
  </section>
</header> <!--FIN HEADER-->

<main class="container filosofia_main">
  <div class="row">
    <?php
      $arg = array(
        'post_type'		 => 'filosofia',
        'posts_per_page' => 6
      );
      $get_arg = new WP_Query( $arg );
      while ( $get_arg->have_posts() ) {
        $get_arg->the_post();
      ?>
    <div class="col-md-6">
      <h2 class="filosofia_main__nuevo text-center"><?php the_title() ?></h2>
      <div class="filosofia_main__texto text-center">
        <?php the_content() ?>
      </div>
    </div>
    <?php } wp_reset_postdata(); ?>
  </div>
</main> <!--FIN MAIN FILOSOFIA.HTML-->
