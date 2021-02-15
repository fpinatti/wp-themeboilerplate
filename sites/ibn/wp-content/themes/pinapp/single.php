<?php get_header(); ?>

<div class="container blog-single">
	<div class="row">
		<div class="col-12">
		<?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
				
				<article 
					id="post-<?php the_ID(); ?>" 
					<?php 
					post_class(get_post_custom_values($key = 'custom-css')); ?>
				>

				<h2 class="alt-font font-weight-bold font-italic fs-md-36 color-secondary" style="font-size:26px"><?php the_title(); ?></h2>
					<?php if( has_post_thumbnail() ): ?>
						<div><?php the_post_thumbnail('large', array( 'class' => 'w-100 obj-fit-cover-center' )); ?></div>
					<?php endif; ?>
					<small class="tag-list w-100"><?php the_tags($before = '', $sep = ''); ?> <?php edit_post_link(); ?></small>
					<?php the_content(); ?>
					<hr>
					<div class="row mb-4">
						<div class="col-6 text-left"><?php previous_post_link('%link'); ?></div>
						<div class="col-6 text-right"><?php next_post_link('%link'); ?></div>
					</div>
				</article>

			<?php endwhile;
			
		endif;
				
		?>
	</div>
	</div>
	
</div>

<?php get_footer(); ?>