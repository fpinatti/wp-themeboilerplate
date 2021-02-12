<?php 
/*
	Template Name: Site Section Template
*/
get_header(); ?>

<main>
	<?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>

	<section
		id="post-<?php the_ID(); ?>"
		<?php post_class(get_post_custom_values($key = 'custom-css')); ?>
		style="<?php get_post_custom_values($key = 'inline-css'); ?>"
	>

		<?php the_content(); ?>

	</section>

	<?php endwhile;
		endif;
		?>
</main>

<?php get_footer(); ?>