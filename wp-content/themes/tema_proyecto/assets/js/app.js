
$(document).ready(function(){

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

  // Activacion Tooltipster

  $('.tooltip').tooltipster({
    theme: 'tooltipster-noir'
  });

  // API COBRO
  var stripe = Stripe('pk_test_93NbiROVfG0l8DGpX369WUx3003dSrQMdz');
  var elements = stripe.elements();

  // Custom styling can be passed to options when creating an Element.
    var style = {
      base: {
        // Add your base input styles here. For example:
        fontSize: '16px',
        color: "#32325d",
      }
    };

    // Create an instance of the card Element.
    var card = elements.create('card', {style: style});

    // Add an instance of the card Element into the `card-element` <div>.
    card.mount('#card-element');

    card.addEventListener('change', function(event) {
      var displayError = document.getElementById('card-errors');
      if (event.error) {
        displayError.textContent = event.error.message;
      } else {
        displayError.textContent = '';
      }
    });

    // Create a token or display an error when the form is submitted.
      var form = document.getElementById('payment-form');
      form.addEventListener('submit', function(event) {
        event.preventDefault();

        stripe.createToken(card).then(function(result) {
          if (result.error) {
            // Inform the customer that there was an error.
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
          } else {
            // Send the token to your server.
            stripeTokenHandler(result.token);
          }
        });
      });

      function stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);

        // Submit the form
        form.submit();
      }

});
