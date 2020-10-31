<?php 
/*
	Template Name: Site Template
*/
get_header(); 
$args = array(
	'post_type' => 'page',
	'posts_per_page' => '-1',
	'meta_value' => 'secao_site',
	'orderby' => 'date',
	'order' => 'ASC'
);
$homePosts = new WP_Query($args);
if( $homePosts->have_posts() ):
	while( $homePosts->have_posts() ): $homePosts->the_post(); 
		$categories = get_the_category();
		get_template_part('partials/content'); ?>
	<?php endwhile;
endif;
wp_reset_postdata();
get_footer();
?>