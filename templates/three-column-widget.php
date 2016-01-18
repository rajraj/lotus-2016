<hr>
<div id="book-search">
  <?php get_product_search_form(); ?>
</div>

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
