<?php get_header(); ?>

    <div class="row">

      <div class="col-md-9">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div class="row">

            <div class="col-md-4">
              <img src="https://placeholdit.imgix.net/~text?txtsize=33&w=300&h=300" alt="x" class="img-responsive" />
            </div>

            <div class="col-md-8">

              <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <p class="post-details">
                <?php echo the_time('F jS, Y');?><br>
                <?php the_category( ', ' ); ?>
              </p>
              <div class="content">
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="w8-button grey text-center wide-30">Read More</a>
              </div>

            </div>

          </div>

          <hr>

        <?php endwhile; endif; ?>

      </div>

      <div class="col-md-3">

        <?php if ( dynamic_sidebar( 'blog-sidebar' ) ); ?>

      </div>

    </div>

<?php get_footer(); ?>
