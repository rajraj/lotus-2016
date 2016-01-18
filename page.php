<?php get_header(); ?>

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

  <?php get_template_part( 'templates/three-column-widget', 'none' ); ?>

<?php get_footer(); ?>
