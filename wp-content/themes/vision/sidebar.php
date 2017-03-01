<div class="sidebar">

  <div class="col l12" style="margin-top:-55px;">
    <a href="<?php echo get_category_link(19); ?>"><p class="tituloChueco" style="margin-bottom:15px;"><span>Revista Digital</span></p></a>
    <?php


      $args = array(
        'numberposts' => 1,
        'category' => 19
      );

      $lanzamientos = get_posts( $args );
      $src = wp_get_attachment_image_src( get_post_thumbnail_id($lanzamientos[0]->ID), 'full' );//setoma la imagen con thumbnail_id
      $url = $src[0];
    ?>
    <a href="<?php echo get_the_permalink($lanzamientos[0]->ID); ?>">
      <img src="<?php echo $url; ?>" alt="" width="100%;">
    </a>
  </div>

  <div class="col l12 m12 s12 margin-imagen bottom-imagen">
    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fvisionautomotrizweb%2F&tabs=timeline&width=273&height=700&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=123763174339398" width="273px" height="700" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

  </div>
  <div class="col l12" style="margin-top:50px;">
    <p class="tituloChueco" style="margin-bottom:15px;"><span>Patrocinadores</span></p>
    <img src="http://placehold.it/350x350" alt="" style="margin-bottom:15px;">
    <img src="http://placehold.it/350x350" alt="" style="margin-bottom:15px;">
  </div>

  <div class="col l12" style="margin-top:50px;">
    <a href="<?php echo get_category_link(21); ?>"><p class="tituloChueco" style="margin-bottom:15px;"><span>Prueba de manejo</span></p></a>
    <?php
      $args = array(
        'numberposts' => 1,
        'category' => 21
      );

      $lanzamientos = get_posts( $args );
      $src = wp_get_attachment_image_src( get_post_thumbnail_id($lanzamientos[0]->ID), 'full' );//setoma la imagen con thumbnail_id
      $url = $src[0];
    ?>
    <a href="<?php echo get_the_permalink($post->ID); ?>">
      <div class="nota" style="margin-bottom:0px;">
        <img src="<?php echo fly_get_attachment_image_src( get_post_thumbnail_id($lanzamientos[0]->ID), array( 330, 330 ), true)['src']; ?>" alt="" width="100%">
        <p class="descripcionNota">
          <strong><?php echo $lanzamientos[0]->post_title; ?></strong><br>
          <?php //echo codeExtracto($lanzamientos[0], 15); ?>

          <div class="redes">
            <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/square-facebook-64.png" class="social">
            <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/square-twitter-128.png" class="social">
            <a href="<?php echo get_the_permalink($post->ID); ?>" class="mas">Leer más »</a>
          </div>

        </p>
      </div>
    </a>
  </div>

  <div class="col l12" style="margin-top:60px;">
    <a href="<?php echo get_category_link(22); ?>"><p class="tituloChueco" style="margin-bottom:15px;"><span>Julio Brito en la crónica</span></p></a>
    <?php
      $args = array(
        'numberposts' => 1,
        'category' => 22
      );

      $lanzamientos = get_posts( $args );
    ?>
    <a href="<?php echo get_the_permalink($lanzamientos[0]->ID); ?>">
      <img src="<?php bloginfo("template_url"); ?>/images/13.jpg" alt="" class="imagen-3">
    </a>
  </div>


  <div class="col l12" style="margin-top:60px;">
    <p class="tituloChueco" style="margin-bottom:15px;"><span>Patrocinadores</span></p>
    <img src="http://placehold.it/350x350" alt="" style="margin-bottom:15px;">
    <img src="http://placehold.it/350x350" alt="" style="margin-bottom:15px;">
  </div>
</div>
