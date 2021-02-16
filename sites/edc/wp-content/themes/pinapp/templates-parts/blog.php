<?php 
/*
	Template Name: Blog Template
*/
get_header(); ?>

<main class="container blog-wrapper">
	<div class="row">
		<div class="col-12 mt-4 mb-3">
			<h2
				class="alt-font font-weight-bold font-italic fs-md-36 color-secondary"
				style="font-size:26px"
			>Estudos bíblicos</h2>
		</div>
		<div class="col-12 d-flex flex-wrap justify-content-start">
			<?php 
				$args = array(
					'type' => 'post',
					'posts_per_page' => '-1',
					'orderby' => 'date',
					'order' => 'ASC'
				);
				$blogPosts = new WP_Query($args);
				if( $blogPosts->have_posts() ):
					while( $blogPosts->have_posts() ): $blogPosts->the_post(); 
					get_template_part('partials/content', 'blog');?>
			<?php endwhile; ?>

			<?php endif;
				wp_reset_postdata();
			?>
		</div>
	</div>
</main>
<?php get_footer(); ?>