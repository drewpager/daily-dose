<?php get_header(); ?>
<!-- <section class="slide"> -->
<div class="content">
	<div class="container">
    <header class="sticky-page-button">
			<div>
        <a href="/"><img style="width: 50px; margin: 10px; padding: 5px;" src="https://res.cloudinary.com/drewpager/image/upload/v1596204837/daily-dose/daily-dose-floating-head_lspi3a.png"></a>
        <a href="https://subscribe.dailydosenow.com" rel="noreferrer" target="_blank"><button type="submit" style="margin-top: 10px; right: 0;" class="button deepOrange gradient" name="submit">Sign Up</button></a>
			</div>
    </header>	
			<?php
			if ( have_posts() ):
				while ( have_posts() ):
					the_post();
					get_template_part( 'template-parts/content', 'article' );
				endwhile;
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
		</div>
	</div>
<!-- </section> -->