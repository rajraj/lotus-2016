<?php get_header(); ?>
  <section id="main">

  <?php if ( have_posts() ) : ?>

    <?php if ( is_home() && ! is_front_page() ) : ?>
      <header>
        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
      </header>
    <?php endif; ?>

    <?php
    // Start the loop.
    while ( have_posts() ) : the_post();

      the_content();

    // End the loop.
    endwhile;

  // If no content, include the "No posts found" template.
  else :
    get_template_part( 'content', 'none' );

  endif;
  ?>

  <hr>
  <div id="book-search"></div>

  <div class="row footer-widgets">

    <div class="col-md-4">
      <?php if ( dynamic_sidebar( 'home-page-left-pane' ) ); ?>
    </div>

    <div class="col-md-4">
      <?php if ( dynamic_sidebar( 'home-page-middle-pane' ) ); ?>
    </div>

    <div class="col-md-4">
      <?php if ( dynamic_sidebar( 'home-page-right-pane' ) ); ?>
    </div>

  </div>

</section>

<?php get_footer(); ?>
