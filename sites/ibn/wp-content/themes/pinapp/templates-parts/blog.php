<?php 
/*
	Template Name: Blog Template
*/
get_header(); ?>

<main class="container blog-wrapper">
	<div class="row">
		<div class="col-12 mt-4 mb-3">
			<h2 class="alt-font font-weight-bold font-italic fs-md-36 color-secondary" style="font-size:26px">Estudos bíblicos</h2>
		</div>
		<div class="col-12 d-flex flex-wrap justify-content-start">
			<?php 
				$args = array(
					'type' => 'post',
					'posts_per_page' => '-1',
					'category__in' => array(2),
					'orderby' => 'date',
					'order' => 'ASC'
				);
				$blogPosts = new WP_Query($args);
				if( $blogPosts->have_posts() ):
					while( $blogPosts->have_posts() ): $blogPosts->the_post(); ?>
			<article
				
				id="post-<?php the_ID(); ?>"
				<?php 
				$classes = array('card', 'blog-card');
				$customClass = get_post_custom_values($key = 'custom-css');
				if ($customClass) {
					$classes = array_merge(get_post_custom_values($key = 'custom-css'), $classes);
				}
				post_class($classes); ?>
			>

				<?php the_post_thumbnail('large', array( 'class' => 'card-img-top' )); ?>
				<div class="card-body">
					<h5 class="card-title w-100"><?php the_title(); ?></h5>
					<small class="tag-list w-100"><?php the_tags($before = '', $sep = ''); ?> <?php edit_post_link(); ?></small>
					<span class="card-text w-100"><?php the_excerpt(); ?></span>
					<a
						href="<?php esc_url( get_permalink()); ?>"
						class="btn btn-primary"
					>Acessar</a>
				</div>
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
</main>
<?php get_footer(); ?>