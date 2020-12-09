<?php 
  /* Template Name: Archives */
?>
<?php 
	get_header();
?> 
<section class="slide">
  <div class="content">
    <div class="container">
    <header class="sticky-page-button">
			<div>
        <a href="/"><img style="width: 50px; margin: 10px; padding: 5px;" src="https://res.cloudinary.com/drewpager/image/upload/v1596204837/daily-dose/daily-dose-floating-head_lspi3a.png"></a>
        <a href="https://subscribe.dailydosenow.com" rel="noreferrer" target="_blank"><button type="submit" style="margin-top: 10px; right: 0;" class="button deepOrange gradient" name="submit">Sign Up</button></a>
			</div>
    </header> 
      <!-- <div class="wrap"> -->
        <!-- <div class="fix-12-12">
            <div class="fix-6-12"> -->
              <div>
                <div class="archive-layout">
                  <?php 
                    if (have_posts() ): while ( have_posts() ): the_post();
                    ?>
                    <h1 class="archive-title"><?php echo get_the_title(); ?></h1>
                    <ol class="archive-list">
                      <li class="archive-item"><h4><?php wp_get_archives(array('type' => 'postbypost', 'show_post_count' => 'true' )); ?></h4></li>
                    </ol>
                  <?php endwhile; endif;
                  ?>
                  <div class="right-bar">
                    <div class="sidebar-ad">
                      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                      <!-- Daily Dose Sidebar -->
                      <ins class="adsbygoogle"
                          style="display:block"
                          data-ad-client="ca-pub-1041022037840931"
                          data-ad-slot="6095125167"
                          data-ad-format="auto"
                          data-full-width-responsive="true"></ins>
                      <script>
                          (adsbygoogle = window.adsbygoogle || []).push({});
                      </script>
                    </div>
                    <div>
                      <h3>Categories</h3>
                      <ol>
                        <li><?php wp_list_categories( array(
                          'exclude' => array(1),
                          'title_li' => ''
                        )) ?></li>
                      </ol>
                    </div>
                  </div>  
                </div>
              </div>
            <!-- </div> -->
        <!-- </div> -->
      <!-- </div> -->
    </div>
  </div>
  <!-- <div class="background" style="background-image:url(<?php echo get_template_directory_uri().'/assets/img/background/img-73.jpg'?>)"></div> -->
</section>
<?php 
  get_footer();
?>