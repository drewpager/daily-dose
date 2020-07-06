<?php 
	get_header();
?> 
<!-- Main Content -->
<section class="slide fade-3 parallax">
  <div class="content">
    <div class="container">
      <div class="wrap">
        <div class="heading-div">
        </div>
        <div class="fix-12-12">
            <div class="fix-6-12">
              <div class="text-wrap">
              <?php echo get_the_post_thumbnail( $post_id, array(500, 350)); ?>
              <h1><?php echo get_the_title(); ?></h1>
                <p><?php echo the_content(); ?></p>
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