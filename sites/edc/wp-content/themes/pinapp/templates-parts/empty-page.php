<?php 
/*
	Template Name: Empty Page Template
*/
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
	<meta
		name="description"
		content="<?php bloginfo('description'); ?>"
	>
	<link
		rel="preconnect"
		href="https://fonts.gstatic.com"
	>
	<link
		href="https://fonts.googleapis.com/css2?family=Concert+One&family=Montserrat:wght@200;400;700;900&family=Just+Another+Hand&display=swap"
		rel="stylesheet"
	>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<a class="skip-link sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>
	

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

	<?php wp_footer(); ?>
</body>

</html>