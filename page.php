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
        <div class="fix-12-12">
            <div class="fix-6-12">
              <div class="text-wrap">
                <?php 
                  if (have_posts() ): while ( have_posts() ): the_post();

                  get_template_part('content', 'article' );
                  
                endwhile; endif;
                ?>
                <h1><?php echo get_the_title(); ?></h1>
                <p><?php echo the_content(); ?></p>
              </div>
            </div>
        <!-- </div> -->
      </div>
    </div>
  </div>
  <!-- <div class="background" style="background-image:url(<?php echo get_template_directory_uri().'/assets/img/background/img-73.jpg'?>)"></div> -->
</section>
<?php 
  get_footer();
?>