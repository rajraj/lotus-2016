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

  function create_widget( $name, $id, $description )
  {
    register_sidebar(array(
      'name' => __($name),
      'id' => $id,
      'description' => __($description),
      'before_widget' => '<div class="widget">',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    ));
  }

  create_widget('Home Page Left', 'home-page-left-pane', 'Display content for home page left pane.');
  create_widget('Home Page Middle', 'home-page-middle-pane', 'Display content for home page middle pane.');
  create_widget('Home Page Right', 'home-page-right-pane', 'Display content for home page right pane.');

  // WooCommerce Theme Support
  add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
  add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

  function my_theme_wrapper_start() {
    echo '<section id="main">';
  }

  function my_theme_wrapper_end() {
    echo '</section>';
  }

  add_action( 'after_setup_theme', 'woocommerce_support' );
  function woocommerce_support() {
    add_theme_support( 'woocommerce' );
  }

  add_action( 'woo_header_inside', 'woo_custom_add_searchform', 10 );

  function woo_custom_add_searchform () {
      echo '<div id="book-search" class="book-search fr">' . "
  ";
      get_template_part( 'searchform' );
      echo '</div>' . "
  ";
  } // End woo_custom_add_searchform()
?>
