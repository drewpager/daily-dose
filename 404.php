<?php get_header(); ?>
   <div class="content">
	  <div class="container">	
		<header class="sticky-page-button">
			<div>
        <a href="/"><img style="width: 50px; margin: 10px; padding: 5px;" src="https://res.cloudinary.com/drewpager/image/upload/v1596204837/daily-dose/daily-dose-floating-head_lspi3a.png"></a>
        <a href="https://subscribe.dailydosenow.com" rel="noreferrer" target="_blank"><button type="submit" style="margin-top: 10px; right: 0;" class="button deepOrange gradient" name="submit">Sign Up</button></a>
			</div>
    </header> 
    <div class="fourohfour">
      <div class="four-text">
        <h2>Today on the Daily Doh!</h2>
        <p>That link does not wanna work... it's most likely our developer's fault, rest assured, justice will prevail.</p>   
        <p>In the meantime, here are some links to pages that actually work:</p>
      </div>
      <div class="four-suggest">
        <ul>
      <?php $my_query = new WP_Query( 'posts_per_page=1' );
        while ( $my_query->have_posts() ) : $my_query->the_post();
        $do_not_duplicate[] = $post->ID; ?>
          <li class="col-5-12 bottom">
          <a href="<?php echo the_permalink() ?>">
            <?php the_post_thumbnail(array(500, 300) ); ?> 
          </a>
        </li>
        <?php endwhile; ?>
      </ul>
      </div>
      <div class="four-links">
        <ol>
          <li><a href="/">Home</a></li>
          <li><a href="/archives">Archives</a></li>
          <li><a href="https://www.youtube.com/channel/UCuYZAnKoZYXAKKpsi_-90Tg?sub_confirmation=1">YouTube Channel</a></li>
          <li><a href="https://subscribe.dailydosenow.com/">Subscribe</a></li>
        </ol>
      </div>
    </div>   
  </div>
</div>
<?php get_footer(); ?>