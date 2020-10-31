<?php 
/*
	Template Name: Blog Template
*/
get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-12">

			<?php 
				$args = array(
					'type' => 'post',
					'posts_per_page' => '-1',
					'category__in' => array(6),
					'orderby' => 'date',
					'order' => 'ASC'
				);
				$blogPosts = new WP_Query($args);
				if( $blogPosts->have_posts() ):
					while( $blogPosts->have_posts() ): $blogPosts->the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				

							
						<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
							
						<?php if( has_post_thumbnail() ): ?>
							
							<div class="pull-right"><?php the_post_thumbnail('thumbnail'); ?></div>
					
						<?php endif; ?>
						
						<small><?php the_category(' '); ?> || <?php the_tags(); ?> || <?php edit_post_link(); ?></small>
						
						<?php the_excerpt(); ?>
						
						<hr>
						
						<!-- <div class="row">
							<div class="col-6 text-left"><?php previous_post_link(); ?></div>
							<div class="col-6 text-right"><?php next_post_link(); ?></div>
						</div> -->
					</article>
					<?php endwhile; ?>

					<div class="col-xs-6 text-left">
					<?php next_posts_link('« Older Posts'); ?>
					</div>
					<div class="col-xs-6 text-right">
					<?php previous_posts_link('Newer Posts »'); ?>
					</div>
				<?php endif;
				wp_reset_postdata();
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
