<?php 
	get_header();
?> 
		<!-- Main Content -->
		<section class="slide fade-3 parallax">
			<div class="content">
				<div class="container">
					<div class="wrap">
					<div class="heading-div">
							<h1>The Daily Dose</h1>
							<h3>Bringing You Bite-size Brilliance Everyday With the Three-Minute Classroom.</h3>
						</div>
						<form action="https://enlightenmedaily.us4.list-manage.com/subscribe/post?u=47cd7880319189a19819d5855&amp;id=aa10a9ad5e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate autocomplete="off" class="slides-form margin-bottom-3">
							<button type="submit" class="button blue gradient ae-2" name="submit">Sign Up</button>
						</form>
						<div class="fix-12-12">
							<ul class="flex left">
							<?php 
									if ( have_posts() ) :
										while ( have_posts() ) :
											the_post();
											$id = get_the_ID();
									?>
								<li class="col-6-12">
									<p class="opacity-6 margin-bottom-2 ae-1"><?php the_date(); ?></p>
									<h1 class="ae-1"><?php the_title(); ?></h1>
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
								<?php 
									endwhile;
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
							<form action="https://enlightenmedaily.us4.list-manage.com/subscribe/post?u=47cd7880319189a19819d5855&amp;id=aa10a9ad5e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate autocomplete="off" class="slides-form margin-bottom-3">
								<!-- <input type="email" class="ae-2" name="email" placeholder="E-mail address"/> -->
								<button type="submit" class="button blue gradient ae-2" name="submit">Sign Up</button>
							</form>
						</div>
										
					</div>
				</div>
			</div>
			<div class="background" style="background-image:url(<?php echo get_template_directory_uri().'/assets/img/background/img-89.jpg'?>)"></div>
		</section>
	   
		<?php 
			get_footer();
		?>
         


