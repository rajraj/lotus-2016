<!doctype html>
<html>
<head>
  <!-- General Head Content -->
  <!-- meta tags -->
<meta charset="utf-8" />
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' /><![endif]-->

<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- title tag-->
<title>
  <?php wp_title( '|', true, 'right' ); ?>
  <?php bloginfo( 'name' ); ?>
</title>

<!-- search engine -->
<link rel="canonical" href="http://themes.getbootstrap.com/products/marketing" />

<!-- open graph -->

  <meta property="og:type" content="book" />
  <meta property="og:title" content="Publishing" />

  <meta property="og:image" content="" />
  <meta property="og:image:secure_url" content="" />

  <meta property="og:image" content="" />
  <meta property="og:image:secure_url" content="" />

  <meta property="og:price:amount" content="" />
  <meta property="og:price:currency" content="GBP" />

  <meta property="og:description" content="" />

  <meta property="og:url" content="http://www.lotuspublishing.co.uk/" />
  <meta property="og:site_name" content="Lotus Publishing" />

  <meta name="twitter:card" content="book" />
  <meta name="twitter:title" content="Publishing" />
  <meta name="twitter:description" content="." />
  <meta name="twitter:image" content="" />
  <meta name="twitter:label1" content="" />
  <meta name="twitter:data1" content="" />

  <meta name="twitter:label2" content="Brand" />
  <meta name="twitter:data2" content="Lotus Publishing" />

  <!-- styles -->
  <?php wp_head(); ?>
  <link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>

</head>

<body <?php body_class(); ?>>

  <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="container">

          <div class="row">
            <nav id="nav-left" class="site-navigation">
              <?php
                $args = array(
                  'menu' => 'header-menu-left',
                  'theme_location' => 'header-menu-left',
                  'container' => 'false',
                  'menu_class' => 'menu-list'
                );
                wp_nav_menu( $args );
              ?>
            </nav>

            <div id="site-logo">
              <a href="<?php bloginfo( 'url' ); ?>">
                <img src="<?php bloginfo('template_url'); ?>/img/lotus-logo.jpg" alt="<?php bloginfo('name'); ?>" />
              </a>
            </div>

            <nav id="nav-right" class="site-navigation pull-right">
              <?php
                $args = array(
                  'menu' => 'header-menu-right',
                  'theme_location' => 'header-menu-right',
                  'container' => 'false',
                  'menu_class' => 'menu-list'
                );
                wp_nav_menu( $args );
              ?>
            </nav>
          </div>
