<?php

  function book_author_names( $product_id )
  {
    $authors = wp_get_post_terms( $product_id, 'authors' );
    $authors_array = array();

    foreach( $authors as $author ) {
      array_push($authors_array, $author->name);
    }

    $author_names = implode( ", ", $authors_array );
    return $author_names;
  }
?>
