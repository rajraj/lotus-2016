<?php get_header(); ?>

<section id="main">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="row">

      <div class="col-md-8">

        <h2 class="post-title"><?php the_title(); ?></h2>
        <div class="content">
          <?php the_content(); ?>
        </div>

        <hr>

        <?php comments_template(); ?>

      </div>

      <div class="col-md-4">

        <img src="https://placeholdit.imgix.net/~text?txtsize=33&w=300&h=300" alt="x" class="img-responsive" />

      </div>

    </div>

  <?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>
