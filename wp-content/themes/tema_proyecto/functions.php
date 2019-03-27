<?php

// Registro de Estilos

function register_enqueue_style() {
  $theme_data = wp_get_theme();

  /*Registrando estilos*/
  wp_register_style('bootstrap',
  'https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css',
  null, '1.0.0', 'screen');
  wp_register_style('bootstrap_tema',
  'https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css',
  null, '1.0.0', 'screen');
  wp_register_style('fontawesome',
  'https://use.fontawesome.com/releases/v5.5.0/css/all.css',
  null, '1.0.0', 'screen');
  wp_register_style('googlefonts',
  'https://fonts.googleapis.com/css?family=Lobster|Nunito+Sans:300|Quicksand:300,700');
  wp_register_style('main',
  get_parent_theme_file_uri('/assets/css/styles.css'),
  null, '1.0.0', 'screen');

  /* Enqueue estilos */
  wp_enqueue_style('bootstrap');
  wp_enqueue_style('bootstrap_tema');
  wp_enqueue_style('fontawesome');
  wp_enqueue_style('googlefonts');
  wp_enqueue_style('main');

}

add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );

// Registro de Scripts

function register_enqueue_scripts() {
  $theme_data = wp_get_theme();

  /*Resgistrando Scripts*/
  wp_register_script('jQuery',
  'https://code.jquery.com/jquery-3.3.1.slim.min.js',
  null, '3.3.1', true);
  wp_register_script('my_js',
  get_parent_theme_file_uri('/assets/js/app.js'),
  null, '1.0.0', 'screen');
  wp_register_script('bootstrap-js',
  'https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js',
  array('jQuery'));

  /*Enqueue Scripts*/
  wp_enqueue_script('jQuery');
  wp_enqueue_script('my_js');
  wp_enqueue_script('bootstrap-js');
}

add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' )
?>
