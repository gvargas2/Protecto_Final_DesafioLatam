<?php /* Template Name: Galería */ ?>
<?php get_header(); ?>

  <!--HEADER CONTACTO.HTML-->
  <header>
    <section class="galeria_header">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center galeria_header__titulo">Galería Fotográfica</h1>
          <h3 class="text-center galeria_header__subtitulo">Conócenos!</h3>
        </div>
      </div>
    </section>
  </header> <!--FIN HEADER-->

  <!--MAIN CONTACTO.HTML-->

  <div class="container">
    <div class="row galeria_cuerpo">
      <div class="col-md-4">
        <img src="assets/img/noquis_espinaca_2.jpg" alt="Noquis Espinaca" class="meals__img img-responsive">
        <button class="social__btn social__like" href="#"><i class="fas fa-heart"></i></button>
      </div>
      <div class="col-md-4">
        <img src="assets/img/noquis_calabaza_2.jpg" alt="Noquis Calabaza" class="meals__img img-responsive">
        <button class="social__btn social__like" href="#"><i class="fas fa-heart"></i></button>
      </div>
      <div class="col-md-4">
        <img src="assets/img/noquis_remolacha.jpg" alt="Noquis Remolacha" class="meals__img img-responsive">
        <button class="social__btn social__like" href="#"><i class="fas fa-heart"></i></button>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
