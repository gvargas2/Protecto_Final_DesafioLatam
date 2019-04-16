<!--HEADER CONTACTO.HTML-->
<header>
  <section class="galeria_header">
    <div class="row" data-aos="fade-up" data-aos-duration="3000">
      <div class="col-md-12">
        <h1 class="text-center galeria_header__titulo">Galería Fotográfica</h1>
        <h3 class="text-center galeria_header__subtitulo">Conócenos!</h3>
      </div>
    </div>
  </section>
</header> <!--FIN HEADER-->

<!--MAIN CONTACTO.HTML-->

<div class="container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="row galeria_cuerpo">
    <div class="">
      <?php the_content(); ?>
    </div>
  </div>
  <?php endwhile; endif; ?>
</div>
