<?php 
	get_header();
?> 
		<!-- Main Content -->
		<section class="slide fade-3 parallax">
			<div class="content">
				<div class="container">
					<div class="wrap">
					<div class="heading-div">
							<h1><b>The Daily Dose</b></h1>
							<!-- <h3>Bringing You Bite-size Brilliance Everyday With the Three-Minute Classroom.</h3> -->
							<h3><?php echo get_bloginfo('description') ?></h3>
						</div>
						<a href="https://cdn.forms-content.sg-form.com/278d9bdb-a668-11ea-a701-7ad71dacb7cb" rel="noreferrer" target="_blank"><button type="submit" class="sticky-button button blue gradient ae-2" name="submit">Sign Up</button></a>
						<div class="fix-12-12">
							<ul class="flex left">

							<?php $my_query = new WP_Query( 'posts_per_page=1' );
								while ( $my_query->have_posts() ) : $my_query->the_post();
								$do_not_duplicate[] = $post->ID; ?>

									<li class="col-6-12">
									<p class="opacity-6 margin-bottom-2 ae-1"><?php the_date(); ?></p>
									<div class="popupTrigger margin-bottom-3 ae-2" data-popup-id="<?php echo $id ?>">
										<h1 class="ae-1"><?php the_title(); ?></h1>
									</div>
									<div class="ae-2"><p class="opacity-8"><?php the_excerpt(); ?></p></div>
									<!-- <a class="ae-3" href="<?php echo the_permalink(); ?>">Learn More &rarr;</a> -->
								</li>
								<li class="col-1-12">&nbsp;</li>
								<li class="col-5-12 bottom">
									<div class="videoThumbnail shadow rounded popupTrigger margin-bottom-3 ae-2" data-popup-id="<?php echo $id ?>">
									<?php include(get_template_directory_uri() . "/assets/svg/video-icon-dark.svg")?>
									<img src="<?php the_post_thumbnail(array(500, 300)); ?>" class="wide videoThumbnail" alt="Video Thumbnail"/>
								</div>
									<div class="popup autoplay" data-popup-id="<?php echo $id ?>">
									<div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
										<div class="content">
											<div class="container">
												<div class="wrap">
													<div class="fix-10-12">
														<div class="embedVideo popupContent">
															<?php the_content(); ?>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>

								<?php endwhile; ?>

									<li class="col-6-12">
									<p class="opacity-6 margin-bottom-2 ae-1">Today's Sponsor</p>
									<h1 class="ae-1">Brought To You By</h1>
									<div class="ae-2"><p class="opacity-8">We are able to provide free content to you every single day because of ads like this.</p></div>
								</li>
								<li class="col-1-12">&nbsp;</li>
								<li class="col-5-12 bottom">
								<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
									<!-- Daily Dose Ads -->
									<ins class="adsbygoogle"
											style="display:block"
											data-ad-client="ca-pub-1041022037840931"
											data-ad-slot="2103516715"
											data-ad-format="auto"
											data-full-width-responsive="true"></ins>
									<script>
											(adsbygoogle = window.adsbygoogle || []).push({});
									</script>
								</li>
									
								 <?php 
								 if ( have_posts() ) : while ( have_posts() ) : the_post(); 
								 if ( in_array( $post->ID, $do_not_duplicate ) ) continue; 
								 # query_posts( array( 'post__not_in' => $do_not_duplicate ) );
								?> 
							
						
									<!-- Do stuff... -->

									<li class="col-6-12">
									<p class="opacity-6 margin-bottom-2 ae-1"><?php the_date(); ?></p>
									
									<!-- Click the title to see single post -->
									<a href="<?php echo the_permalink(); ?>">
										<h1 class="ae-1"><?php the_title(); ?></h1>
									</a>

									<!-- Click the title to see the video -->
									<!-- <div class="popupTrigger margin-bottom-3 ae-2" data-popup-id="<?php echo $id ?>">
										<h1 class="ae-1"><?php the_title(); ?></h1>
									</div> -->

									<div class="ae-2"><p class="opacity-8"><?php the_excerpt(); ?></p></div>
									<!-- <a class="ae-3" href="<?php echo the_permalink(); ?>">Learn More &rarr;</a> -->
								</li>
								<li class="col-1-12">&nbsp;</li>
								<li class="col-5-12 bottom">
									<div class="videoThumbnail shadow rounded popupTrigger margin-bottom-3 ae-2" data-popup-id="<?php echo $id ?>">
									<?php include(get_template_directory_uri() . "/assets/svg/video-icon-dark.svg")?>
									<img src="<?php the_post_thumbnail(array(500, 300)); ?>" class="wide videoThumbnail" alt="Video Thumbnail"/>
								</div>
									<div class="popup autoplay" data-popup-id="<?php echo $id ?>">
									<div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
										<div class="content">
											<div class="container">
												<div class="wrap">
													<div class="fix-10-12">
														<div class="embedVideo popupContent">
															<?php the_content(); ?>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
								<?php endwhile; ?>
									<nav>
										<ul style="align-content: center;">
											<?php next_posts_link('<button type="submit" class="button blue gradient ae-2" name="submit">← More</button>')?>
											<?php previous_posts_link('<button type="submit" class="button blue gradient ae-2" name="submit">Newer →</button>')?>
										</ul>
									</nav>
								<?php	
								endif;
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="background" style="background-image:url(<?php echo get_template_directory_uri().'/assets/img/background/img-73.jpg'?>)"></div>
		</section>

		<!-- call to action -->
		<section class="slide fade-3 parallax">
			<div class="content">
				<div class="container">
					<div class="wrap">
					
						<div class="fix-6-12">
							<h1 class="huge ae-1 margin-bottom-2">Bite-Sized Brillance</h1>
							<p class="hero ae-2 margin-bottom-3"><span class="opacity-8">Subscribe to The Daily Dose Newsletter for a Microdose of Knowledge.</span></p>
								<!-- <input type="email" class="ae-2" name="email" placeholder="E-mail address"/> -->
								<a href="https://cdn.forms-content.sg-form.com/278d9bdb-a668-11ea-a701-7ad71dacb7cb" rel="noreferrer" target="_blank"><button type="submit" class="button blue gradient ae-2" name="submit">Sign Up</button></a>
						</div>
										
					</div>
				</div>
			</div>
			<div class="background" style="background-image:url(<?php echo get_template_directory_uri().'/assets/img/background/img-89.jpg'?>)"></div>
		</section>
	   
		<?php 
			get_footer();
		?>