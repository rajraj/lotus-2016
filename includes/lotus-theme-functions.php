<?php
  // Hide admin bar.
  add_filter( 'show_admin_bar', '__return_false' );
  add_theme_support( 'menus' );
  add_theme_support( 'post-thumbnails' );

  function theme_styles ()
  {
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri(). '/css/bootstrap.min.css' );
    wp_enqueue_style( 'theme_css', get_template_directory_uri(). '/style.css' );
  }
  add_action( 'wp_enqueue_scripts', 'theme_styles' );

  function theme_scripts()
  {
    global $wp_scripts;
    wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false );
    wp_register_script( 'respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false );
    $wp_scripts->add_data( 'html5shiv', 'respond_js', 'conditional', 'lt IE 9' );

    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery', 'bootstrap_js'), '', true );
  }
  add_action( 'wp_enqueue_scripts', 'theme_scripts' );

  function register_theme_menus()
  {
    register_nav_menus(
      array(
        'header-menu-left' => __( 'Header Menu Left' ),
        'header-menu-right' => __( 'Header Menu Right' )
      )
    );
  }
  add_action( 'init', 'register_theme_menus' );
?>
