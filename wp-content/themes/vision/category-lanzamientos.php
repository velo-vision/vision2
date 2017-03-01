<?php
  get_header();
?>

<div class="row marco nomargin">


  <!-- <div class="col l12 m12 s12 margin-30"> -->
  <div class="row">
    <div class="col s12 m12 12 margin-80 relative">
      <div class=" col l4 m4 s9 ">
        <div class="tituloChueco">
          <span><?php echo get_the_archive_title(); ?></span>
        </div>
      </div>
    </div>
    <div class="col l9 m12 s12 margin-10">
      <div class="linea-gris">
      </div>
    </div>
  </div>
  <div class="col l12 m12 s12">
    <div class="col l9">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


      <?php
        // $args = array(
        //   'numberposts' => 10,
        //   'category' => 20
        // );
        //
        // $lanzamientos = get_posts( $args );
        // if ( 1 ) {
        //     foreach ( $lanzamientos as $post ){
                // setup_postdata( $post );
                // $src = wp_get_attachment_image_src( get_post_thumbnail_id($post['ID']), 'full' );//setoma la imagen con thumbnail_id
              	// $url = $src[0];//se toma la url
                ?>
                <div class="nota nopadding" >
                  <div class="row" style="padding: 10px 0;">
                    <div class="col l4 m4 s12">
                      <img src="<?php echo fly_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), array( 625, 300 ), true)['src']; ?>" alt="" width="100%">
                    </div>
                    <div class="col l8 m8 s12">
                      <p class="descripcionNota">
                        <strong><?php echo get_the_title(); ?><strong><br>
                        <?php echo codeExtracto(get_post(get_the_ID()), 20); ?>
                        <div class="redes">
                          <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/square-facebook-64.png" class="social">
                          <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/square-twitter-128.png" class="social">
                          <a href="<?php echo get_the_permalink($post->ID); ?>" class="mas">Leer más »</a>
                          <div class="clear"></div>
                        </div>
                      </p>
                    </div>
                  </div>
                </div>

            <?php
        //     }
        //     // wp_reset_postdata();
        // }
      ?>
    <?php endwhile; else: ?>
      <div class="entry">
        <p>Sorry, no posts matched your criteria.</p>
      </div>
    <?php endif; ?>

    </div>
  <div class="col l3">
    <?php get_sidebar(); ?>
    </div>
  </div>
	<div class="" style="clear:both;"></div>
</div>
<div class="" style="clear:both;"></div>



<?php get_footer(); ?>
