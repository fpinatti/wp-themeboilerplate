<?php 
/*
	Template Name: Blog Template
*/
get_header(); ?>

<div class="container blog-wrapper">

			<?php 
				$args = array(
					'type' => 'post',
					'posts_per_page' => '-1',
					'orderby' => 'date',
					'order' => 'ASC'
				);
				$blogPosts = new WP_Query($args);
				if( $blogPosts->have_posts() ):
					while( $blogPosts->have_posts() ): $blogPosts->the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
						<small><?php the_category(' '); ?> || <?php the_tags(); ?> || <?php edit_post_link(); ?></small>

						<?php if( has_post_thumbnail() ): ?>
							<div class="row">
								<div class="col-3">
									<?php the_post_thumbnail('thumbnail'); ?>
								</div>
								<div class="col-9">
								<?php the_excerpt(); ?>
								</div>
							</div>
						<?php else: ?>
							<div class="row">
								<div class="col-12">
								<?php the_excerpt(); ?>
								</div>
							</div>
						<?php endif; ?>
						
						
						
						
						<hr>
						
					</article>
					<?php endwhile; ?>

				<?php endif;
				wp_reset_postdata();
			?>
</div>
<?php get_footer(); ?>
