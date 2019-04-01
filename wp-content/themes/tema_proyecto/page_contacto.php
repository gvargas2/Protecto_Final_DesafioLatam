<?php /* Template Name: Contacto */ ?>
<?php get_header(); ?>

  <!--HEADER CONTACTO.HTML-->
  <header>
    <section class="contacto_header">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center contacto_header__titulo">Necesitas hablar con nosotros?</h1>
          <h3 class="text-center contacto_header__subtitulo">Estas son todas las formas que tienes de contactarnos!</h3>
        </div>
      </div>
    </section>
  </header> <!--FIN HEADER-->

  <!--MAIN CONTACTO.HTML-->
  <main class="container contacto_main">

    <div class="row">
      <div class="col-md-6">
        <section class="contacto_main__datos">
          <h3 class="text-center contacto_titulo">Nuestros datos de contacto:</h3>
          <p><strong>Correo:</strong> lanoqueria@contacto.cl</p>
          <p><strong>Correo:</strong> lanoqueria@ventas.cl</p>
          <p><strong>WhatSapp:</strong> +569 83404424</p>
        </section>
      </div>
      <div class="col-md-6">
        <section class="contacto_main__rrss">
          <h3 class="text-center contacto_titulo">Nuestras Redes Sociales</h3>
          <p><a href="#">Facebook</a></p>
          <p><a href="#">Instagram</a></p>
          <p><a href="#">Twitter</a></p>
        </section>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <section class="contacto_main__ubicacion">
          <h3 class="text-center contacto_titulo">Donde Trabajamos</h3>
          <p>Dirección: Presidente Errázuriz #4383, Las Condes</p>
        </section>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="embed-responsive embed-responsive-4by3">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.1597367746654!2d-70.58518324919008!3d-33.41907960319462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf1bd4aa63b1%3A0x7c00cad30383e268!2sPdte+Err%C3%A1zuriz+4383%2C+Las+Condes%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses!2scl!4v1547652358137"
          class="embed-responsive-item" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <section class="contacto_main__formulario">
          <h3 class="text-center contacto_titulo">O puedes contactarnos directamente</h3>
          <form class="form-horizontal">
            <div class="form-group">
              <label for="exampleInputName2" class="col-sm-2 control-label">Nombre</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="exampleInputName2" placeholder="Juan Pérez">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Email:</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputemail3" placeholder="juanperez@gmail.com">
              </div>
            </div>
            <div class="formulario_contacto">
              <label for="exampleInputName2" class="col-sm-2 control-label">Comentario:</label>
                <div class="col-sm-10">
                  <textarea class="form-control" rows="3" placeholder="Tus comentarios"></textarea>
                </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Enviar</button>
              </div>
            </div>
          </form>

        </section>
      </div>
    </div>

  </main> <!--FIN MAIN CONTACTO.HTML-->

<?php get_footer(); ?>
