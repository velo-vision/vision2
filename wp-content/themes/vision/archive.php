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
                <div class="nota">
                  <img src="<?php echo fly_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), array( 1100, 690 ), true)['src']; ?>" alt="" width="100%">
                  <div class="tituloChueco">
                    <span><?php echo get_the_title(); ?></span>
                  </div>
                  <p class="descripcionNota">
                    <?php echo codeExtracto(get_post(get_the_ID())); ?>
                    <?php
                    $galeria = get_field("galeria");
                    if(count($galeria)){
                      ?>
                      <div class="galeriaNota">
                        <?php
                        foreach ($galeria as $key => $value) {
                          # code...
                          ?>
                          <a href="<?php echo $value['url']; ?>" class="fancybox-thumb" rel="fancybox-thumb-<?php echo get_the_ID(); ?>" style="<?php echo (($key>3)? "display:none;":""); ?>">
                            <img src="<?php echo fly_get_attachment_image_src( ($value['ID']), array( 240, 160 ), true)['src']; ?>" alt="">
                          </a>
                          <?php
                          // print_r($value);
                        }
                        ?>
                      </div>
                      <?php
                      }
                    ?>
                    <div class="redes">
                      <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/square-facebook-64.png" class="social">
                      <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/square-twitter-128.png" class="social">
                      <a href="<?php echo get_the_permalink($post->ID); ?>" class="mas">Leer más »</a>
                    </div>
                  </p>
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
