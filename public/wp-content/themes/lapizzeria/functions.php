<?php

// link or Import the database.php files (this contains the SQL structure)
require get_template_directory() . '/inc/database.php';

// Handles the submission to the database
require get_template_directory() . '/inc/reservations.php';

// Creates Option Pages for the Theme
require get_template_directory() . '/inc/options.php';

function lapizzeria_setup() {
  add_theme_support('post-thumbnails'); // adds featured image to page.php page

  add_image_size('boxes', 437, 291, true);

  add_image_size('specialties', 768, 515, true);

  add_image_size('specialty-portrait', 435, 530, true);

  // change demensions of thumbnail image
  update_option('thumbnail_size_w', 253);

  update_option('thumbnail_size_h', 164);

}
add_action('after_setup_theme', 'lapizzeria_setup');

function lapizzeria_styles() {
  // adding stylesheets
  wp_register_style('googlefont', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700|Raleway:400,700,900', array(), '1.0.0');
  wp_register_style('normalize', get_template_directory_uri() . '/assets/css/partial/vendor/normalize.css', array(), '6.0.0' );
  wp_register_style('fluidboxcss', get_template_directory_uri() . '/assets/css/partial/vendor/fluidbox.min.css', array(), '6.0.0' );
  wp_register_style('fontawesome', get_template_directory_uri() . '/assets/css/partial/vendor/font-awesome.css', array(), '4.7.0' );
  // Bootstrap
  wp_register_style('bootstrap',
  get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css', array(), '4.0.0' );
  wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0' );

  // Enqueue the style
  wp_enqueue_style('normalize');
  wp_enqueue_style('fluidboxcss');
  wp_enqueue_style('fontawesome');
  wp_enqueue_style('googlefont');
  wp_enqueue_style('bootstrap');
  wp_enqueue_style('style');



  // add Javascript files
  wp_register_script('script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);
  wp_register_script('tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array(), '1.4.0', true);
  wp_register_script('fluidboxjs', get_template_directory_uri() . '/js/jquery.fluidbox.min.js', array('jquery'), '4.0.0', true);
  wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.0.0', true);
  // Enqueue the scripts
  wp_enqueue_script('jquery');
  wp_enqueue_script('fluidboxjs');
  wp_enqueue_script('tether');
  wp_enqueue_script('bootstrap');
  wp_enqueue_script('script');
}
add_action('wp_enqueue_scripts', 'lapizzeria_styles');

// Add menus
function lapizzeria_menus() {
  register_nav_menus(array(
    'header-menu' => __('Header Menu', 'lappizzeria'),
    'social-menu' => __('Social Menu', 'lappizzeria')
));
}
add_action('init', 'lapizzeria_menus');

function lapizzeria_specialties() {
  $labels = array(
    'name'               => _x( 'Pizzas', 'lapizzeria' ),
    'singular_name'      => _x( 'Pizzas', 'post type singular name', 'lapizzeria' ),
    'menu_name'          => _x( 'Pizzas', 'admin menu', 'lapizzeria' ),
    'name_admin_bar'     => _x( 'Pizzas', 'add new on admin bar', 'lapizzeria' ),
    'add_new'            => _x( 'Add New', 'book', 'lapizzeria' ),
    'add_new_item'       => __( 'Add New Pizza', 'lapizzeria' ),
    'new_item'           => __( 'New Pizzas', 'lapizzeria' ),
    'edit_item'          => __( 'Edit Pizzas', 'lapizzeria' ),
    'view_item'          => __( 'View Pizzas', 'lapizzeria' ),
    'all_items'          => __( 'All Pizzas', 'lapizzeria' ),
    'search_items'       => __( 'Search Pizzas', 'lapizzeria' ),
    'parent_item_colon'  => __( 'Parent Pizzas', 'lapizzeria' ),
    'not_found'          => __( 'No Pizzas found', 'lapizzeria' ),
    'not_found_in_trash' => __( 'No Pizzas found in Trash', 'lapizzeria' ),
  );

  $args = array(
    'labels'              => $labels,
    'description'         => __( 'Description.', 'lapizzeria' ),
    'public'              => true,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'query_var'           => true,
    'rewrite'             => array( 'slug' => 'specialties' ),
    'capability_type'     => 'post',
    'has_archive'         => true,
    'hierarchical'        => false,
    'menu_position'       => 6,
    'supports'            => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'          => array( 'category' ),
  );

  register_post_type ( 'specialties', $args );

}
add_action( 'init', 'lapizzeria_specialties' );

/** Widget Zone **/

function lapizzeria_widgets() {
  register_sidebar( array(
    'name' => 'Blog Sidebar',
    'id' => 'blog_sidebar',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));
}
add_action('widgets_init', 'lapizzeria_widgets');
