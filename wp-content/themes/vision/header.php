<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
  <head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/font-awesome.css" />

    <!-- SLIDER -->
    <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/assets/css/magic.min.css">
    <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/assets/dist/css/jquery.desoslide.css">
    <link type="text/css" rel="stylesheet" href="<?php bloginfo("template_url"); ?>/style.css" />


    <!-- bxSlider CSS file -->
    <link href="<?php bloginfo("template_url"); ?>/css/jquery.bxslider.css" rel="stylesheet" />

    <!-- FIN SLIDER -->

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


    <!-- <link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" /> -->
    <?php wp_head(); ?>
    <script type="text/javascript">
      function codeReady(callback, data = null){
        var call = callback;
        if(window.addEventListener){
          window.addEventListener('load', function(event, call) {
            //do work
            return callback();
          });
        }else{
          window.attachEvent('onload', function(event, call) {
            //do work
            return callback();
          });
        }
      }
    </script>
  </head>
  <body>
    <div id="wptime-plugin-preloader"></div>
    <div id="fb-root"></div>


<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.8&appId=123763174339398";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <div class="row sinmargin marco">
       <img src="http://placehold.it/2460x250" style="display:none; margin: 0 auto; width:100%; margin-top:5px;">
       <div class="col s12 m12 l12">
          <img src="<?php bloginfo("template_url"); ?>/images/menu/mg1.png" class="encabezado-menu">
          <div class="col l12 m12 s12 sociales nopadding">
            <a href="https://www.facebook.com/visionautomotrizweb/"><i style="font-size: 25px;" class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://twitter.com/visionauto"><i style="font-size: 25px;" class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="https://www.youtube.com/user/visionautomotriz"><i style="font-size: 25px;" class="fa fa-youtube" aria-hidden="true"></i></a>
            <a href="https://plus.google.com/u/0/?partnerid=gplp0"><i style="font-size: 25px;" class="fa fa-google-plus" aria-hidden="true"></i></a>
          </div>
       </div>
    </div>
    <nav style="margin-bottom:20px;">
      <div class="nav-wrapper marco">
        <a href="#" class="brand-logo">
          <img src="<?php bloginfo("template_url"); ?>/images/logo1.png" alt="Visión Automotriz" width="100%">
        </a>
        <a href="#" data-activates="mobile-demo" class="button-collapse">
          <i class="material-icons">menu</i>
        </a>
        <ul class="center hide-on-med-and-down  menu ancho-li">
          <li <?php if(is_home()) echo 'class="active"'; ?>><a href="<?php echo site_url(); ?>" class="fondo-menu-img nopadding">INICIO</a></li>
          <li <?php if(is_category("2")) echo 'class="active"'; ?>><a href="<?php echo get_category_link(2); ?>" class="fondo-menu-img nopadding">NOTICIAS</a></li>
          <li <?php if(is_category("29")) echo 'class="active"'; ?>><a href="<?php echo get_category_link(29); ?>" class="fondo-menu-img nopadding" >ENTREVISTAS</a></li>
          <li <?php if(is_category("23")) echo 'class="active"'; ?>><a href="<?php echo get_category_link(23); ?>" class="fondo-menu-img nopadding" >EVENTOS</a></li>
          <li <?php if(is_category("12")) echo 'class="active"'; ?>><a href="<?php echo get_category_link(12); ?>" class="fondo-menu-img nopadding" >LANZAMIENTOS</a></li>
          <li <?php if(is_category("30")) echo 'class="active"'; ?>><a href="<?php echo get_category_link(30); ?>" class="fondo-menu-img nopadding" >TRACTOS</a></li>
          <li <?php if(is_category("31")) echo 'class="active"'; ?>><a href="<?php echo get_category_link(31); ?>" class="fondo-menu-img nopadding" >MULTIMEDIA</a></li>
          <!-- <li><a href="<?php echo get_category_link(12); ?>" class="fondo-menu-img nopadding" >MÁS...</a></li> -->
          <li>
            <!-- <a href="#" class="fondo-menu-img" ><i class="fa fa-search" aria-hidden="true"></i></a> -->
            <div class='search-container'>
              <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
                <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" size="15" placeholder="Buscar"/>
                <a class='button'>
                  <i class='fa fa-search'></i>
                </a>
                <input type="submit" id="searchsubmit" value="Search" style="display:none;"/>
              </form>
            </div>
          </li>
          <div class="clear"></div>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li <?php if(is_home()) echo 'class="active"'; ?>><a href="<?php echo site_url(); ?>" class="fondo-menu-img nopadding">INICIO</a></li>
          <li <?php if(is_category("2")) echo 'class="active"'; ?>><a href="<?php echo get_category_link(2); ?>" class="fondo-menu-img nopadding">NOTICIAS</a></li>
          <li <?php if(is_category("29")) echo 'class="active"'; ?>><a href="<?php echo get_category_link(29); ?>" class="fondo-menu-img nopadding" >ENTREVISTAS</a></li>
          <li <?php if(is_category("23")) echo 'class="active"'; ?>><a href="<?php echo get_category_link(23); ?>" class="fondo-menu-img nopadding" >EVENTOS</a></li>
          <li <?php if(is_category("12")) echo 'class="active"'; ?>><a href="<?php echo get_category_link(12); ?>" class="fondo-menu-img nopadding" >LANZAMIENTOS</a></li>
          <li <?php if(is_category("30")) echo 'class="active"'; ?>><a href="<?php echo get_category_link(30); ?>" class="fondo-menu-img nopadding" >TRACTOS</a></li>
          <li <?php if(is_category("31")) echo 'class="active"'; ?>><a href="<?php echo get_category_link(31); ?>" class="fondo-menu-img nopadding" >MULTIMEDIA</a></li>
        </ul>
      </div>
    </nav>
    <div class="row marco nomargin">
      <div class="news jnewsbar jnews-dark jnews-top jnews-slideUp">
      	<h2>[Últimas noticias]</h2>
      	<ul>
          <?php
          $args = array(
            'numberposts' => 5,
            'category' => 13
          );

          $lanzamientos = get_posts( $args );
          if ( $lanzamientos ) {
            foreach ( $lanzamientos as $post ){
              ?>
              <li><a href='<?php echo get_the_permalink($post->ID); ?>' title="<?php echo $post->post_title; ?>" data-toggle="tooltip"><?php echo $post->post_title; ?></a></li>
              <?php
            }
          }
          ?>
      	</ul>
      </div>
    </div>
