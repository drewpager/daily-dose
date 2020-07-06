<?php get_header(); ?>
<div class="content">
	<div class="container">	
		<header>
			<div>
				<a href="/"><img style="width: 50px; margin: 10px; padding: 5px;" src="https://res.cloudinary.com/drewpager/image/upload/v1591281330/daily-dose/brain_vax7rq.png"></a>
				<a href="https://cdn.forms-content.sg-form.com/278d9bdb-a668-11ea-a701-7ad71dacb7cb" rel="noreferrer" target="_blank"><button type="submit" style="margin-top: 10px; right: 0;" class="button orange gradient" name="submit">Sign Up</button></a>
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