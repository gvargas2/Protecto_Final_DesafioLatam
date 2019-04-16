$(document).ready(function(){

  // Inicializando AOS
  AOS.init();

  $('#whatever').hoverGrid();
  $('#whatever2').hoverGrid();
  $('#whatever3').hoverGrid();
  $('#whatever4').hoverGrid();
  $('#whatever5').hoverGrid();

  $('#whatever6').hoverGrid();
  $('#whatever7').hoverGrid();
  $('#whatever8').hoverGrid();
  $('#whatever9').hoverGrid();
  $('#whatever10').hoverGrid();

  $('#whatever11').hoverGrid();
  $('#whatever12').hoverGrid();
  $('#whatever13').hoverGrid();
  $('#whatever14').hoverGrid();
  $('#whatever15').hoverGrid();

  // ADD BOOTSTRAP CLASS FOR NAVBAR MENU
  $('#menu-mi_menu li').addClass('nav-item').children(this).addClass('nav-link js-scroll-trigger');
  $('.nav-item:last-of-type a').addClass('btn btn-primary').removeClass('js-scroll-trigger');

  $('.categorias').on('click', '.agregar', function(e){
    e.preventDefault();
    var compra = $(this).parent().find('.categoria__titulo').html();
  $('.compras').append(compra + '\n');
  });

  $('.finalizar_compra').on('click', function (e){
    e.preventDefault();
    $('.estado_solicitud').prepend('Ahora te llegará un correo con todos los datos para continuar con tu compra');
  });

  $('.social__like').on('click', function() {
    alert('Diste un like!');
  });

  //Consumieno API UNSPLASH

  var json_url = 'https://api.unsplash.com/photos/search?client_id=bcfd0fbb8d466bf656ab0c76bc905d02c7da69d786f3df4121fb7fdeeaf0b176&query=santiago&per_page=4';
  $.getJSON(json_url, function( images ){
    images.forEach(function(image) {
      var $img = $('<img>');
      $img.attr('src', image.urls.small);
      $('.gallery').append('<div>'+JSON.parse($img)+'</div>');
    });
  });



});
