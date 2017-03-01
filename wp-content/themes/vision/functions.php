<?php
if ( function_exists('register_sidebars') )
    register_sidebars();

if ( function_exists( 'add_theme_support' ) )
  add_theme_support( 'post-thumbnails' );

function codeExtracto($post, $words = 80){
  if ( empty( $post->post_excerpt ) ) {
    echo wp_kses_post( wp_trim_words( $post->post_content, $words ) );
  } else {
      echo wp_kses_post( $post->post_excerpt );
  }
}

function my_theme_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }

    return $title;
}

add_filter( 'get_the_archive_title', 'my_theme_archive_title' );

?>
