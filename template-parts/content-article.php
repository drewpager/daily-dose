<?php 
	get_header();
?> 
<!-- Main Content -->
<section class="slide fade-3 parallax">
  <div class="content">
    <div class="container">
      <div class="wrap">
        <!-- <div class="heading-div">
        </div> -->
        <div class="fix-12-12">
            <div class="fix-6-12">
              <div class="text-wrap">
              <!-- <?php echo get_the_post_thumbnail( $post_id, array(500, 350)); ?> -->
              <h1 style="text-align: center;"><?php echo get_the_title(); ?></h1>
              <div class="videoThumbnail shadow rounded popupTrigger margin-bottom-3 ae-2" data-popup-id="<?php echo $id ?>">
									<?php include(get_template_directory_uri() . "/assets/svg/video-icon-dark.svg")?>
									<img src="<?php the_post_thumbnail(array(500, 300)); ?>" class="wide videoThumbnail" alt="Video Thumbnail"/>
								</div>
									<div class="popup" data-popup-id="<?php echo $id ?>">
									<div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
										<div class="content">
											<div class="container">
												<div class="wrap">
													<div class="fix-10-12">
														<div class="embedVideo popupContent">
															<?php the_field('custom_youtube_embed'); ?>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
                <?php echo the_content(); ?></p>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="background" style="background-image:url(<?php echo get_template_directory_uri().'/assets/img/background/img-73.jpg'?>)"></div>
</section>
<?php 
  get_footer();
?>

