<?php get_header(); ?>

<div class="row">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="col-md-4 team-member">

      <?php
        if ( has_post_thumbnail() ) {
        	the_post_thumbnail( 'medium', array( 'class' => 'img-reponsive' ) );
        }
      ?>

      <h3 class="team-member-name"><?php the_title(); ?></h3>

      <em class="team-member-title"><?php echo types_render_field("job-title"); ?></em>

      <div class="team-member-bio">
        <?php echo types_render_field("bio"); ?>
      </div>

    </div>

  <?php endwhile; endif; ?>

</div>

<?php get_template_part( 'templates/three-column-widget', 'none' ); ?>

<?php get_footer(); ?>
