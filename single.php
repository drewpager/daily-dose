<?php get_header(); ?>
<header>
	<div>
    <a href="/"><img style="width: 50px; margin: 5px; align-self: center;" src="https://res.cloudinary.com/drewpager/image/upload/v1591281330/daily-dose/brain_vax7rq.png"></a>
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
              
<?php get_footer(); ?>
