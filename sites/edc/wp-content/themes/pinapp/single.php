<?php get_header(); ?>

<main class="container blog-single">
	<div class="row">
		<div class="col-12">
			<?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>

			<article
				id="post-<?php the_ID(); ?>"
				<?php 
					$classes = array('blog-page');
					$customClass = get_post_custom_values($key = 'custom-css');
					if ($customClass) {
						$classes = array_merge(get_post_custom_values($key = 'custom-css'), $classes);
					}
					post_class($classes);
				?>
			>

				<?php the_title('<h1 class="title-section">Blog: ','</h1>' ); ?>

				<section>
				<?php if( has_post_thumbnail() ): ?>
					<?php the_post_thumbnail('large', array( 'class' => 'blog-featured-img' )); ?>
				<?php endif; ?>
				<div>
				<small class="tag-list w-100"><?php the_tags($before = '', $sep = ''); ?> <?php edit_post_link(); ?></small>
				</div>

				<?php the_content(); ?>

				<hr>

				<div class="row">
					<div class="col-6 text-left"><?php previous_post_link(); ?></div>
					<div class="col-6 text-right"><?php next_post_link(); ?></div>
				</div>
				</section>
			</article>

			<?php endwhile;
			
		endif;
				
		?>
		</div>
	</div>

</main>

<?php get_footer(); ?>