<?php get_header(); ?>

<div class="container blog-wrapper">
	<div class="row">
		<div class="col-12">
			<?php if( have_posts() ): ?>
			<div class="col-12 mt-4 mb-3">
				<h2
					class="alt-font font-weight-bold font-italic fs-md-36 color-secondary"
					style="font-size:26px"
				>Estudos bíblicos - <?php the_archive_title($before = '', $after = ''); ?></h2>
			</div>
			<header class="page-header">
				<?php 
					the_archive_description('<div class="taxonomy-description">', '</div>');
				?>
			</header>
			<?php while( have_posts() ): the_post(); ?>
			<?php get_template_part('partials/content', 'blog'); ?>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>