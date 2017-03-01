<?php get_header(); ?>
<div class="row marco nomargin">
		<div class="row">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php
				if(in_category("19")){
					?>
					<div class="col l12">
						<div class="nota single">

							<h1>
								<div class="tituloChueco">
									<span><?php echo $post->post_title; ?></span>
								</div>
							</h1>
							<div class="post" id="post-<?php the_ID(); ?>">
								<iframe src="<?php echo get_field("revista"); ?>" width="100%" height="1200"  frameborder="0" allowfullscreen=""></iframe>
							</div>

						</div>
						<div class="row">
							<div class="col s12 m12 12 relative margin-80">
								<div class=" col l4 m4 s5 paralelo-lanzamiento">
									<p class="titulo1">Otras Publicaciones</p>
								</div>
							</div>
							<?php
								$args = array(
									'numberposts' => 3,
									'orderby' => "rand",
									'category' => 19,
									'exclude' => array(get_the_ID())
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
													if(count($t) && 0){
													?>
														<a href="#" class="tag" style=""><?php echo $t[0]->name; ?></a><br>
													<?php } ?>
													<strong><?php echo $value->post_title; ?></strong><br><br>
													<?php echo codeExtracto($value, 30); ?>

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
						</div>
					</div>
					<?php
				}
				else{


				?>
			<div class="col l9">


				<div class="nota single">
					<div class="clear"></div>
					<h1>
						<div class="tituloChueco">
							<span><?php echo $post->post_title; ?></span>
						</div>
					</h1>
					<img src="<?php echo fly_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), array( 1100, 690 ), true)['src']; ?>" alt="" width="100%">

					<?php echo do_shortcode('[easy-social-share buttons="facebook,twitter,google,mail,whatsapp,gmail,skype" counters=0 style="button" point_type="simple"]'); ?>
					<div class="post" id="post-<?php the_ID(); ?>">
						<!-- <p><?php the_time('F jS, Y') ?> <?php the_author() ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p> -->

						<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>


							<?php
							$galeria = get_field("galeria");
							if(count($galeria)){
								?>
								<div class="galeriaNota">
									<?php
									foreach ($galeria as $key => $value) {
										# code...
										?>
										<a href="<?php echo $value['url']; ?>" class="fancybox-thumb" rel="fancybox-thumb-<?php echo $post->ID; ?>" style="<?php echo (($key>3)? "":""); ?>">
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
						<?php if ( function_exists('the_tags') ) { the_tags('<p>Tags: ', ', ', '</p>'); } ?>
						</div></div>

						<div class="fb-comments" data-width="100%" data-href="<?php echo get_the_permalink(); ?>" data-numposts="10"></div>

						<div class="col s12 m12 12 relative margin-80">
					    <div class=" col l4 m4 s5 paralelo-lanzamiento">
					      <p class="titulo1">Noticias que te pueden interesar</p>
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
					        'numberposts' => 3,
					        'orderby' => "rand",
									'category' => 20,
									'exclude' => array(get_the_ID())
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
					                if(count($t) && 0){
					                ?>
					                  <a href="#" class="tag" style=""><?php echo $t[0]->name; ?></a><br>
					                <?php } ?>
					                <strong><?php echo $value->post_title; ?></strong><br><br>
					                <?php echo codeExtracto($value, 30); ?>

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

						<img src="http://placehold.it/2460x250" style="display:block; margin: 30px auto; width:100%;">


				</div>
				<div class="col l3" style="margin-top:100px;">
					<?php get_sidebar(); ?>
				</div>
				<?php } ?>
			</div>
		<?php endwhile; else: ?>
			<div class="entry">
				<p>Sorry, no posts matched your criteria.</p>
			</div>
		<?php endif; ?>
</div>


<?php get_footer(); ?>
