<?php 
	get_header();
?> 
<script defer src="https://f.convertkit.com/ckjs/ck.5.js"></script>
<script async data-uid="0d23da7839" src="https://successful-writer-7375.ck.page/0d23da7839/index.js"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0" nonce="KY89t0HO"></script>
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
									<?php the_post_thumbnail(array(500, 300) ); ?> 
								</div>
									<div class="popup autoplay" data-popup-id="<?php echo $id ?>">
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
                  <div class="share-buttons"> 
                    <div class="fb-share-button" data-href="<?php echo get_permalink() ?>" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdailydosenow.com%2Fstealing-mona-lisa%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
                    <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-size="large" data-text="<?php echo get_the_title() ?>" data-url="<?php echo get_permalink()?>" data-via="TheDailyDose18" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    <!-- <a class="email-share" href="mailto:?subject=<?php get_the_title() ?>&amp;body=<?php get_the_permalink() ?>">✉ Email</a> -->
                  </div>
                  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                      <ins class="adsbygoogle"
                           style="display:block; text-align:center;"
                           data-ad-layout="in-article"
                           data-ad-format="fluid"
                           data-ad-client="ca-pub-1041022037840931"
                           data-ad-slot="2075092942"></ins>
                      <script async>
                           (adsbygoogle = window.adsbygoogle || []).push({});
                      </script>
                      <br/>
                <?php echo the_content(); ?></p>
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                      <ins class="adsbygoogle"
                           style="display:block; text-align:center;"
                           data-ad-layout="in-article"
                           data-ad-format="fluid"
                           data-ad-client="ca-pub-1041022037840931"
                           data-ad-slot="2075092942"></ins>
                      <script async>
                           (adsbygoogle = window.adsbygoogle || []).push({});
                      </script>
                      <br/>
              </div>
              <div class="next-post">
                <h4>Previous</h4>
                <h4>Next</h4>
                <p><?php previous_post_link(); ?></p>
                <?php if (!get_next_posts_link()) { ?>
                  <p><?php next_post_link(); ?></p>
                  <!-- <a href="https://subscribe.dailydosenow.com" rel="noreferrer" target="_blank"><button type="submit" style="margin-top: 10px; right: 0;" class="button deepOrange gradient" name="submit">Sign Up</button></a> -->
                <?php } ?>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
  get_footer();
?>
