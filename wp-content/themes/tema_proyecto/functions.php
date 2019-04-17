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
  wp_register_style('aos',
  'https://unpkg.com/aos@2.3.1/dist/aos.css',
  null, '1.0.0', 'screen');
  wp_register_style('hover-css',
  get_parent_theme_file_uri('/assets/css/jquery.hoverGrid.css'),
  null, '1.0.0', 'screen');
  wp_register_style('rateyo',
  'https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css',
  null, '1.0.0', 'screen');

  /* Enqueue estilos */
  wp_enqueue_style('bootstrap');
  wp_enqueue_style('bootstrap_tema');
  wp_enqueue_style('fontawesome');
  wp_enqueue_style('googlefonts');
  wp_enqueue_style('main');
  wp_enqueue_style('aos');
  wp_enqueue_style('hover-css');
  wp_enqueue_style('rateyo');

}

add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );

// Registro de Scripts

function register_enqueue_scripts() {
  $theme_data = wp_get_theme();

  /*Resgistrando Scripts*/
  wp_register_script('jQuery',
  'https://code.jquery.com/jquery-3.3.1.min.js',
  null, '3.3.1', true);
  wp_register_script('my_js',
  get_parent_theme_file_uri('/assets/js/app.js'),
  null, '1.0.0', 'screen');
  wp_register_script('bootstrap-js',
  'https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js',
  array('jQuery'));
  wp_register_script('aos_js',
  'https://unpkg.com/aos@2.3.1/dist/aos.js',
  array(), null, true);
  wp_register_script('hover',
  get_parent_theme_file_uri('/assets/js/jquery.hoverGrid.js'),
  null, null, true);
  wp_register_script('rateyo-js',
  'https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js',
  array(), null, true);

  /*Enqueue Scripts*/
  wp_enqueue_script('jQuery');
  wp_enqueue_script('my_js');
  wp_enqueue_script('bootstrap-js');
  wp_enqueue_script('aos_js');
  wp_enqueue_script('hover');
  wp_enqueue_script('rateyo-js');
}

add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );

// Register Custom Post Type FILOSOFIA
function filosofia_post_type() {

	$labels = array(
		'name'                  => _x( 'filosofias', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'filosofia', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Filofosía', 'text_domain' ),
		'name_admin_bar'        => __( 'Filofofía', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'filosofia', 'text_domain' ),
		'description'           => __( 'Personalización de filosofía', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-smiley',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Filosofia', $args );

}
add_action( 'init', 'filosofia_post_type', 0 );


// Register Custom Post Type NOSOTROS
function nosotros_post_type() {

	$labels = array(
		'name'                  => _x( 'Equipos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Equipo', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Equipo', 'text_domain' ),
		'name_admin_bar'        => __( 'Equipo', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Equipo', 'text_domain' ),
		'description'           => __( 'Personalización sección Nosotros', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-universal-access-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Equipo', $args );

}
add_action( 'init', 'nosotros_post_type', 0 );

// MENÚ PERSONALIZADO
function menus_setup() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' ),
      )
    );
  }
  add_action( 'after_setup_theme','menus_setup' );

?>
