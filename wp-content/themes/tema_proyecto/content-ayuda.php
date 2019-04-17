<!--HEADER CONTACTO.HTML-->
<header>
  <section class="ayuda_header">
    <div class="row" data-aos="fade-up" data-aos-duration="3000">
      <div class="col-md-12">
        <h1 class="text-center ayuda_header__titulo">Preguntas frecuentes</h1>
        <h3 class="text-center ayuda_header__subtitulo">En esta sección podras encontrar respuestas a preguntas generales</h3>
      </div>
    </div>
  </section>
</header> <!--FIN HEADER-->

<main class="container ayuda_main">

  <div class="row">
    <div class="col-md-12" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="3000">
      <h2 class="ayuda_main__nuevo"><?php the_field('pregunta_1'); ?> <i class="fas fa-arrow-alt-circle-down"></i></h2>
      <h5 class="ayuda_main__texto"><?php the_field('texto_pregunta_1'); ?></h5>
    </div>
    <div class="col-md-12" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="3000">
      <h2 class="ayuda_main__nuevo"><?php the_field('pregunta_2'); ?> <i class="fas fa-arrow-alt-circle-down"></i></h2>
      <h5 class="ayuda_main__texto"><?php the_field('texto_pregunta_2'); ?></h5>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="3000">
      <h2 class="ayuda_main__nuevo"><?php the_field('pregunta_3'); ?> <i class="fas fa-arrow-alt-circle-down"></i></h2>
      <h5 class="ayuda_main__texto"><?php the_field('texto_pregunta_3'); ?></h5>
    </div>
    <div class="col-md-12" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="3000">
      <h2 class="ayuda_main__nuevo"><?php the_field('pregunta_4'); ?> <i class="fas fa-arrow-alt-circle-down"></i></h2>
      <h5 class="ayuda_main__texto"><?php the_field('texto_pregunta_4'); ?></h5>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <h2 class="ayuda_main__nuevo">Evalúa esta sección</h2>
      <div id="rateYo"></div>
    </div>
  </div>
</main> <!--FIN MAIN FILOSOFIA.HTML-->
