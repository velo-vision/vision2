<?php
  get_header();
?>

<div class="row marco nomargin">

  <div class="col l12 m12 s12 nopadding bg_main_slider">
    <div class="col l8 m8 s12 sinpadding nomargin separacion-slider flechas-carrusel">
      <ul class="carruselPrincipal">
      <?php
        $args = array(
          'numberposts' => 5,
          'category' => 27
        );
        $lanzamientos = get_posts( $args );
        foreach ($lanzamientos as $key => $value) {
          # code...
          ?>
          <li class="padding-span">
            <a href="<?php echo get_the_permalink($value->ID); ?>">
              <img src="<?php echo fly_get_attachment_image_src( get_post_thumbnail_id($value->ID), array( 995, 590 ), true)['src']; ?>" alt="" title="<?php echo $value->post_title; ?>">
            </a>
          </li>
          <?php
        }
      ?>

      </ul>
    </div>
    <div class="col l4 m4 s12 nomargin ajuste-imagen">
      <?php
        $args = array(
          'numberposts' => 2,
          'category' => 28
        );
        $lanzamientos = get_posts( $args );
        foreach ($lanzamientos as $key => $value) {
          # code...
          ?>
            <a href="<?php echo get_the_permalink($value->ID); ?>">
              <div class="derechaPrincipal">
                <img src="<?php echo fly_get_attachment_image_src( get_post_thumbnail_id($value->ID), array( 995, 590 ), true)['src']; ?>" alt="" title="<?php echo $value->post_title; ?>" width="100%">
                <div class="caption ">
                  <span><?php echo $value->post_title; ?> </span>
                </div>
              </div>
            </a>
          <?php
        }
      ?>
    </div>


  </div>
  <script type="text/javascript">
    codeReady(function(){
      $('.carruselPrincipal').bxSlider({
        mode: 'fade',
        pager: false,
        controls: true,
        captions: true
      });
    });
  </script>

  <div class="row nomargin">
    <div class="col s12 m12 l12 relative margin-100 top1">
      <div class=" col l3 m4 s6 paralelo-gris3">
          <p class="titulo1 right">
            <a href="javascript:void(0);" onclick="codeSlider('prev',lanzamientos, 'lanzamientos');" class="font-white" style="margin-right:50px;" >
              <i class="fa fa-chevron-left font-white" aria-hidden="true" ></i>
            </a>
            <a href="javascript:void(0);" onclick="codeSlider('next', lanzamientos, 'lanzamientos');" class="font-white" >
              <i class="fa fa-chevron-right font-white" aria-hidden="true"></i>
            </a>
          </p>
      </div>
      <div class=" col l3 m4 s8 paralelo-lanzamiento_main">
        <p class="titulo1">LANZAMIENTOS</p>
      </div>
    </div>
  </div>
  <div class="col l9 m12 s12 margin-10">
    <div class="linea-gris">
    </div>
  </div>


  <div class="col l12 m12 s12 nomargin nopadding flechlanzamientos">
  <div class="lanzamientos">

    <?php
      $args = array(
        'numberposts' => 10,
        'category' => 12
      );
      $lanzamientos = get_posts( $args );
      if ( $lanzamientos ) {
          foreach ( $lanzamientos as $post ){
              // setup_postdata( $post );
              // $src = wp_get_attachment_image_src( get_post_thumbnail_id($post['ID']), 'full' );//setoma la imagen con thumbnail_id
              // $url = $src[0];//se toma la url
              ?>


              <div class="slide ">
                <div class="col l12 m12 s12">
                  <a href="<?php echo get_permalink($post->ID); ?>">
                    <img src="<?php echo fly_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 760, 425 ), true)['src']; ?>" alt="" width="100%" style="margin-top:30px;">
                  </a>

                  <a href="<?php echo get_permalink($post->ID); ?>">
                    <div class="tituloChueco1">
                      <span><?php echo $post->post_title; ?></span>
                    </div>
                  </a>

                  <div class="col l12 m12 s12 text-dodge">
                    <a href="<?php echo get_permalink($post->ID); ?>">
                      <p style="margin-top:20px;" class="minuscula">
                        <?php echo codeExtracto($post, 40); ?>
                      </p>
                    </a>
                  </div>
                  <div class=" col l3 offset-l4 m6 offset-m3 s6 offset-s3 paralelo-ver">
                    <a href="<?php echo get_permalink($post->ID); ?>"> <p class="nopadding ver-mas center" style="margin-top:5px;">VER MÁS</p></a>
                  </div>
                </div>
              </div>

          <?php
          }
          // wp_reset_postdata();
      }
    ?>

  </div>
  </div>

  <script type="text/javascript">
    var lanzamientos;
    var direccion = 1;
    codeReady(function(){
      $(document).ready(function(){
        lanzamientos = $('.lanzamientos').bxSlider({
          slideWidth: 500,
          minSlides: 1,
          maxSlides: 3,
          slideMargin: 10,
          pager: false,
          responsive: true,
          moveSlides: 1,
        });
      });
    });
    codeReady(function(){
      $(window).resize(function(){
        if($(window).width() <= 700 && dir){
          lanzamientos.reloadSlider({
              pager: false,
              responsive: true,
              moveSlides: 1,
          });
          dir = 0;
        }
        else if($(window).width() > 700 && !dir){
          lanzamientos.reloadSlider({
            slideWidth: 500,
            minSlides: 1,
            maxSlides: 3,
            slideMargin: 10,
            pager: false,
            responsive: true,
            moveSlides: 1,
          });
          dir = 1;
        }
      });
    });
    function codeSlider(dir, slider, clase){
      // slider.getSlideCount();
      console.log(dir);
      console.log(slider);
      console.log((slider.getCurrentSlide() == slider.getSlideCount()-1)? 0:(slider.getCurrentSlide()+1));
      if(dir == "next"){
        slider.goToSlide((slider.getCurrentSlide() == slider.getSlideCount()-1)? 0:(slider.getCurrentSlide()+1));
      }
      else if(dir == "prev"){
        slider.goToSlide((slider.getCurrentSlide() == 0)? slider.getSlideCount()-1:(slider.getCurrentSlide()-1));
      }
    }
  </script>

  <div class="row">
    <div class="col s12 m12 12 margin-80 relative">
      <div class=" col l4 m4 s9 ">
        <div class="tituloChueco">
          <span>Noticias</span>
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


      <?php
        $args = array(
          'numberposts' => 10,
          'category' => 20
        );
        $lanzamientos = get_posts( $args );
        if ( $lanzamientos ) {
            foreach ( $lanzamientos as $post ){
                // setup_postdata( $post );
                // $src = wp_get_attachment_image_src( get_post_thumbnail_id($post['ID']), 'full' );//setoma la imagen con thumbnail_id
                // $url = $src[0];//se toma la url
                ?>
                <div class="nota">
                  <?php
                  if((get_field("video",$post->ID))){
                    ?>
                    <iframe width="100%" height="600" src="https://www.youtube.com/embed/<?php echo get_field("video", $post->ID); ?>" frameborder="0" allowfullscreen></iframe>
                    <?php
                  }
                  else{
                    ?>
                    <img src="<?php echo fly_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 1100, 690 ), true)['src']; ?>" alt="" width="100%">
                    <?php
                  }
                  ?>
                  <a href="<?php echo get_permalink($post->ID); ?>">
                    <div class="tituloChueco">
                      <span><?php echo $post->post_title; ?></span>
                    </div>
                  </a>
                  <p class="descripcionNota minuscula">
                    <a href="<?php echo get_permalink($post->ID); ?>" >
                      <?php echo codeExtracto($post); ?>
                    </a>
                    <?php
                    $galeria = get_field("galeria",$post->ID);
                    if(count($galeria)){
                      ?>
                      <div class="galeriaNota">
                        <?php
                        foreach ($galeria as $key => $value) {
                          # code...
                          ?>
                          <a href="<?php echo $value['url']; ?>" class="fancybox-thumb" rel="fancybox-thumb-<?php echo $post->ID; ?>" style="<?php echo (($key>3)? "display:none;":""); ?>">
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
                      <?php echo do_shortcode('[easy-social-share buttons="facebook,twitter,google,mail,whatsapp,gmail,skype" counters=0 style="button" point_type="simple"]'); ?>
                      <a href="<?php echo get_the_permalink($post->ID); ?>" class="mas">Leer más »</a>
                    </div>
                  </p>
                </div>

            <?php
            }
            // wp_reset_postdata();
        }
      ?>

    </div>
  <div class="col l3">
    <?php get_sidebar(); ?>
    </div>
  </div>
  <div class="" style="clear:both;"></div>
</div>
<div class="" style="clear:both;"></div>


<div class="suscribe row">
  <div class="col l12 m12 s12">
    <div class="col l12 m12 s12 ">
      <p class="new nomargin">Suscríbete a nuestro newsletter</p>
      <p class="recibe nomargin">Recibe nuestra newsletter con la información más relevante de la industria automotriz.</p>
    </div>
    <div class="col l8 offset-l2 m8 offset-m2 s12 margin-form">
      <form action="index.html" method="post">
        <div class="col l4 m4 s6">
          <input style="height:50px;" type="text" name="nombre" class="form" placeholder="Escribe Nombre">
        </div>
        <div class="col l4 m4 s6">
          <input style="height:50px;" type="text" name="nombre" placeholder="Escribe Correo">
        </div>
        <div class="col l4 m4 s6 offset-s3 center">
          <input style="height:50px; font-size: 20px;" type="submit" class="btn-text boton-enviar" value="Enviar">
        </div>
      </form>
    </div>
  </div>
</div>

<div class="row marco nomargin">
  <div class="col s12 m12 12 relative margin-80">
    <div class=" col l4 m4 s5 paralelo-lanzamiento_main">
      <p class="titulo1">EVENTOS</p>
    </div>
  </div>
  <div class="col l9 m12 s12 margin-10">
    <div class="linea-gris">
    </div>
  </div>
  <div class="col l12 m12 s12 diagonal-pleca" style="margin-top:30px;">
  </div>
  <img src="http://placehold.it/2000x250" style="display:none; margin: 20px auto; width:100%;">

    <?php
      $args = array(
        'numberposts' => 6,
        'category' => 23
      );
      $lanzamientos = get_posts( $args );
      foreach ($lanzamientos as $key => $value) {
        # code...
        $src = wp_get_attachment_image_src( get_post_thumbnail_id($value->ID), 'full' );//setoma la imagen con thumbnail_id
        $url = $src[0];
        $t = wp_get_post_tags($value->ID);
        ?>
        <div class="col l4 m12 s12">
          <a href="<?php echo get_the_permalink($post->ID); ?>">
            <div class="nota" style="margin-bottom:15px; padding-bottom:10px;">
              <img src="<?php echo fly_get_attachment_image_src( get_post_thumbnail_id($value->ID), array( 740, 400 ), true)['src']; ?>" alt="" width="100%">
              <p class="descripcionNota">
                <?php
                if(count($t)){
                ?>
                  <a href="<?php echo get_tag_link($t[0]->term_id); ?>" class="tag" style=""><?php echo $t[0]->name; ?></a><br>
                <?php } ?>
                <strong><?php echo $value->post_title; ?></strong><br>
                <?php echo codeExtracto($value, 15); ?>

                <div class="redes">
                  <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/square-facebook-64.png" class="social">
                  <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/square-twitter-128.png" class="social">
                  <a href="<?php echo get_the_permalink($value->ID); ?>" class="mas">Leer más »</a>
                  <div style="clear:both;"></div>
                </div>


              </p>
            </div>
          </a>
        </div>
        <?php
      }
      ?>



  <img src="http://placehold.it/2000x250" style="display:none; margin: 0 auto; width:100%; margin-top:5px;">


  <div class="col s12 m12 12 relative margin-80" style="display:none;">
    <div class=" col l4 m4 s5 paralelo-lanzamiento">
      <p class="titulo1">VIDEOS</p>
    </div>
    <div class="col l9 m12 s12 margin-10">
      <div class="linea-gris">
      </div>
    </div>
  </div>

  <div class="col l12 m12 s12 nopadding margin-10 nomargin">
  </div>



</div>

<div class="row nopadding nomargin">
  <div class="col l12 m12 s12 diagonal-pleca nopadding">
    <div class="col l12 m12 s12 bg-video nopadding " style="margin-top:20px;">
      <div class="col l12 m12 s12 nopadding">
          <!-- MENU IMAGENES -->
        <div class="col l3 m12 s12 top5">
        <?php $videos2 = get_field("video", 174);  ?>
          <nav class="sample-ctrl">
          <?php $count =1;
              foreach ($videos2 as $key => $value){ ?>
                <div class="col l8 offset-l2 m3 s3">
                  <a data-ctrl="<?php echo $count ?>" href="#<?php $count ?>">
                    <img src="https://img.youtube.com/vi/<?php echo $value['url_video'] ?>/0.jpg" alt="" width="100%" class="foto-video">
                    <p class="text-lorem hide-on-small-only"><?php echo $value['comentario'] ?></p>
                  </a>
                </div>
            <?php $count++;
                }
                ?>
          </nav>
        </div>
        <!-- FIN MENU IMAGENES -->
        <!-- VIDEOS IFRAME -->
        <div class="col l7 m10 offset-m1 s12 nopadding">
          <?php $videos2 = get_field("video", 174);  ?>
            <ul class="scanlines">
            <?php $count =1;
                foreach ($videos2 as $key => $value){ ?>
                  <li id="<?php echo $count; ?>">
                    <iframe id="<?php echo $count; ?>" src= "https://www.youtube.com/embed/<?php echo $value['url_video'] ?>" class="video-size" allowfullscreen></iframe>
                  </li>
              <?php $count ++;
                  }
              ?>
          </ul>
        </div>
        <!-- FIN VIDEOS IFRAME -->

      </div>
  </div>

</div>
</div>

<?php get_footer(); ?>
