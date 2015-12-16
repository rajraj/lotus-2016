<?php
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
?>
