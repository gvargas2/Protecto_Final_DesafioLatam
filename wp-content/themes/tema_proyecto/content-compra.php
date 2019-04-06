<!--CARRUSEL-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <h1 class="titulo_carrusel">La Revolución de los Ñoquis</h1>
        <div class="item active">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/portada_noquis.jpg" alt="foto1 Fundación Niño y Cáncer" class="carrusel img-responsive img_carrusel">
        </div>
        <div class="item">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/nuestra_cocina.jpg" alt="foto2 Fundación Niño y Cáncer" class="carrusel img-responsive img_carrusel">
        </div>
        <div class="item">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/noquis_remolacha.jpg" alt="foto3 Fundación Niño y Cáncer" class="carrusel img-responsive img_carrusel">
        </div>
     </div>
     <!-- Controls -->
     <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
     </a>
     <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
     </a>
</div>
<!--FIN CARRUSEL-->

<!--SECCION MAIN-->
<main class="container principal" data-aos="fade-up" data-aos-duration="3000">
  <!--SECCION 2: PRODUCTOS-->
  <div class="row principal__row">
    <div class="col-md-2 productos">
      <h3>Qué te gustaría probar hoy?</h3>
      <p class="instruccion">Todas las opciones que tenemos para ti</p>

      <div class="row">
        <p class="titulo__selector__noquis col-md-2">ÑOQUIS</p>
      </div>
      <ul class="lista__noquis hidden-xs">
        <li>Beterraga</li>
        <li>Calabaza</li>
        <li>Espinaca</li>
        <li>Papa</li>
        <li>Vegano 100%</li>
      </ul>

      <div class="row">
        <p class="titulo__selector__salsas col-md-2">SALSAS</p>
      </div>
      <ul class="lista__salsas hidden-xs">
        <li>Cremosa</li>
        <li>Pesto</li>
        <li>Pomodoro</li>
        <li>Quesos</li>
        <li>ZeroLacto</li>
      </ul>

      <div class="row">
       <p class="titulo__selector__toppings col-md-2">TOPPINGS</p>
      </div>
      <ul class="lista__toppings hidden-xs">
        <li>Albahaca</li>
        <li>Nueces</li>
        <li>Queso Mozzarella</li>
        <li>Queso Parmesano</li>
        <li>Queso Vegano</li>
      </ul>

    </div>

    <!--SECCION 3: CATEGORIAS-->
    <div class="col-md-10 categorias">

        <div class="row categoria__noquis">
          <div class="col-md-2 categoria__noquis__producto">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/noquis_remolacha.jpg" alt="Ñoquis de Beterraga" class="img-responsive">
            <p class="categoria__titulo">Beterraga</p>
            <p class="categoria__texto">Un color envidiable!</p>
            <a href="#"><i class="fas fa-angle-down"></i>  Más Info</a>
            <a href="#" class="agregar"><i class="fas fa-plus"></i>  Agregar</a>

          </div>
          <div class="col-md-2 categoria__noquis__producto">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/noquis_espinaca_2.jpg" alt="Ñoquis de Espinaca" class="img-responsive">
            <p class="categoria__titulo">Espinaca</p>
            <p class="categoria__texto">Rico y nutritivo!</p>
            <a href="#"><i class="fas fa-angle-down"></i>  Más Info</a>
            <a href="#" class="agregar"><i class="fas fa-plus"></i>  Agregar</a>
          </div>
          <div class="col-md-2 hidden-xs categoria__noquis__producto">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/noquis_calabaza_2.jpg" alt="Ñoquis de Calabaza" class="img-responsive">
            <p class="categoria__titulo">Calabaza</p>
            <p class="categoria__texto">Un poco dulces!</p>
            <a href="#"><i class="fas fa-angle-down"></i>  Más Info</a>
            <a href="#" class="agregar"><i class="fas fa-plus"></i>  Agregar</a>
          </div>
          <div class="col-md-2 hidden-xs categoria__noquis__producto">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/noqui_papa.jpg" alt="Ñoquis de Papa" class="img-responsive">
            <p class="categoria__titulo">Papa</p>
            <p class="categoria__texto">Los de siempre!</p>
            <a href="#"><i class="fas fa-angle-down"></i>  Más Info</a>
            <a href="#" class="agregar"><i class="fas fa-plus"></i>  Agregar</a>
          </div>
          <div class="col-md-2 hidden-xs categoria__noquis__producto">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/noquis_vegano_4.jpg" alt="Ñoquis Veganos" class="img-responsive">
            <p class="categoria__titulo">Vegano 100%</p>
            <p class="categoria__texto">Todos disfrutan!</p>
            <a href="#"><i class="fas fa-angle-down"></i>  Más Info</a>
            <a href="#" class="agregar"><i class="fas fa-plus"></i>  Agregar</a>
          </div>
        </div>

        <div class="row categoria__salsa">
          <div class="col-md-2 categoria__salsa__producto">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/salsa_cremosa_3.jpg" alt="Salsa a base de Crema" class="img-responsive">
            <p class="categoria__titulo">Cremosa</p>
            <p class="categoria__texto">Con crema de leche</p>
            <a href="#"><i class="fas fa-angle-down"></i>  Más Info</a>
            <a href="#" class="agregar"><i class="fas fa-plus"></i>  Agregar</a>
          </div>
          <div class="col-md-2 categoria__salsa__producto">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/salsa_pesto.jpg" alt="Salsa de Pesto" class="img-responsive">
            <p class="categoria__titulo">Pesto</p>
            <p class="categoria__texto">Combinación perfecta</p>
            <a href="#"><i class="fas fa-angle-down"></i>  Más Info</a>
            <a href="#" class="agregar"><i class="fas fa-plus"></i>  Agregar</a>
          </div>
          <div class="col-md-2 hidden-xs categoria__salsa__producto">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/salsa_pomodoro_2.jpg" alt="Salsa Pomodoro" class="img-responsive">
            <p class="categoria__titulo">Pomodoro</p>
            <p class="categoria__texto">Tradicional con un giro</p>
            <a href="#"><i class="fas fa-angle-down"></i>  Más Info</a>
            <a href="#" class="agregar"><i class="fas fa-plus"></i>  Agregar</a>
          </div>
          <div class="col-md-2 hidden-xs categoria__salsa__producto">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/salsa_queso.jpg" alt="Salsa de Quesos" class="img-responsive">
            <p class="categoria__titulo">Quesos</p>
            <p class="categoria__texto">Una bomba</p>
            <a href="#"><i class="fas fa-angle-down"></i>  Más Info</a>
            <a href="#" class="agregar"><i class="fas fa-plus"></i>  Agregar</a>
          </div>
          <div class="col-md-2 hidden-xs categoria__salsa__producto">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/salsa_cremosa_4.jpg" alt="Salsa sin Lactosa" class="img-responsive">
            <p class="categoria__titulo">ZeroLacto</p>
            <p class="categoria__texto">Sin culpas!</p>
            <a href="#"><i class="fas fa-angle-down"></i>  Más Info</a>
            <a href="#" class="agregar"><i class="fas fa-plus"></i>  Agregar</a>
          </div>
        </div>

        <div class="row categoria__topping">
          <div class="col-md-2 categoria__topping__producto">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/albahaca_2.jpg" alt="Albahaca" class="img-responsive">
            <p class="categoria__titulo">Albahaca</p>
            <p class="categoria__texto">Del huerto</p>
            <a href="#"><i class="fas fa-angle-down"></i>  Más Info</a>
            <a href="#" class="agregar"><i class="fas fa-plus"></i>  Agregar</a>
          </div>
          <div class="col-md-2 categoria__topping__producto">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/nueces.jpg" alt="Nueces" class="img-responsive">
            <p class="categoria__titulo">Nueces</p>
            <p class="categoria__texto">Más Textura</p>
            <a href="#"><i class="fas fa-angle-down"></i>  Más Info</a>
            <a href="#" class="agregar"><i class="fas fa-plus"></i>  Agregar</a>
          </div>
          <div class="col-md-2 hidden-xs categoria__topping__producto">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/quesomozzarella_2.jpg" alt="Queso Mozzarella" class="img-responsive">
            <p class="categoria__titulo">Queso Mozzarella</p>
            <p class="categoria__texto">Esquisito!</p>
            <a href="#"><i class="fas fa-angle-down"></i>  Más Info</a>
            <a href="#" class="agregar"><i class="fas fa-plus"></i>  Agregar</a>
          </div>
          <div class="col-md-2 hidden-xs categoria__topping__producto">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/parmesano.jpg" alt="Queso Parmesano" class="img-responsive">
            <p class="categoria__titulo">Queso Parmesano</p>
            <p class="categoria__texto">Más por favor</p>
            <a href="#"><i class="fas fa-angle-down"></i>  Más Info</a>
            <a href="#" class="agregar"><i class="fas fa-plus"></i>  Agregar</a>
          </div>
          <div class="col-md-2 hidden-xs categoria__topping__producto">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/quesovegano_2.jpg" alt="Queso Vegano" class="img-responsive">
            <p class="categoria__titulo">Queso Vegano</p>
            <p class="categoria__texto">Sin culpas</p>
            <a href="#"><i class="fas fa-angle-down"></i>  Más Info</a>
            <a href="#" class="agregar"><i class="fas fa-plus"></i>  Agregar</a>
          </div>
        </div>
    </div>
  </div>

</main>
<!--FIN SECCION MAIN-->


<!--CARRITO DE COMPRAS-->
<section class="shopping container" data-aos="fade-right">
  <div class="row">
    <div class="col-md-4 col-xs-12 shopping__titulo">
      <h2>Lo que disfrutarás hoy</h2>
    </div>
    <div class="col-md-5 col-xs-12 formulario">
      <form>
        <div class="formulario_compras">
          <div class="col-sm-10">
            <textarea class="form-control compras" rows="3" placeholder="Tus compras"></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10 estado_solicitud">
            <button type="submit" class="btn btn-default finalizar_compra">Finalizar Compra</button>
          </div>
        </div>
      </form>

    </div>
    <div class="col-md-3 col-xs-12 shopping__total">
      <h2>Tu total</h2>
      <p>$0.000</p>
    </div>
  </div>

</section>
<!--FIN CARRITO DE COMPRAS-->
