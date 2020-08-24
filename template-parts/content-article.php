<?php 
	get_header();
?> 
<script src="https://f.convertkit.com/ckjs/ck.5.js"></script>
<script async data-uid="0d23da7839" src="https://successful-writer-7375.ck.page/0d23da7839/index.js"></script>
<!-- Main Content -->
  <section class="slide">
    <div class="content">
      <div class="container">
      <div class="wrap">
        <div class="fix-12-12">
            <div class="fix-6-12">
              <div class="text-wrap">
              <!-- <?php echo get_the_post_thumbnail( $post_id, array(500, 350)); ?> -->
              <h1 style="text-align: center;"><?php echo get_the_title(); ?></h1>
              <div class="videoThumbnail shadow rounded popupTrigger margin-bottom-3" data-popup-id="<?php echo $id ?>">
									<!-- <?php include(get_template_directory_uri() . "/assets/svg/video-icon-dark.svg")?> -->
									<img src="<?php the_post_thumbnail(array(500, 300)); ?>" class="wide" alt="Video Thumbnail"/>
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
                  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                      <ins class="adsbygoogle"
                           style="display:block; text-align:center;"
                           data-ad-layout="in-article"
                           data-ad-format="fluid"
                           data-ad-client="ca-pub-1041022037840931"
                           data-ad-slot="2075092942"></ins>
                      <script>
                           (adsbygoogle = window.adsbygoogle || []).push({});
                      </script>
                <?php echo the_content(); ?></p>
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                      <ins class="adsbygoogle"
                           style="display:block; text-align:center;"
                           data-ad-layout="in-article"
                           data-ad-format="fluid"
                           data-ad-client="ca-pub-1041022037840931"
                           data-ad-slot="2075092942"></ins>
                      <script>
                           (adsbygoogle = window.adsbygoogle || []).push({});
                      </script>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="background" style="background-image:url(<?php echo get_template_directory_uri().'/assets/img/background/img-73.jpg'?>)"></div> -->
</section>
<?php 
  get_footer();
?>
