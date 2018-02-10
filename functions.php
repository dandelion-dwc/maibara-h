<?php
add_theme_support( 'post-thumbnails' );

add_filter( 'get_the_archive_title', function ($title) {

    if ( is_category() ) {
      $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
      $title = single_tag_title( '', false );
    }
    elseif ( is_year() ) {
      $title = get_the_date( _x( 'Y', 'yearly archives date format' ) );
    }

    return $title;

});

function wc_get_page_by_slug( $slug = '' ) {
  $pages = get_posts(
      array(
        'post_type'      => 'page',
        'name'           => $slug,
        'posts_per_page' => 1
      )
  );
  return $pages ? $pages[0] : false;
}

add_theme_support('menus');
?>
