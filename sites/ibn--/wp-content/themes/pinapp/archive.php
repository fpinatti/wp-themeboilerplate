<?php get_header(); ?>

<div class="container blog-wrapper">
	<div class="row">
		<div class="col-12">
		<?php if( have_posts() ): ?>
			<header class="page-header">
				<?php 
					the_archive_title('<h1 class="page-title">', '</h1>');
					the_archive_description('<div class="taxonomy-description">', '</div>');
				?>
			</header>
			<?php while( have_posts() ): the_post(); ?>
				<?php get_template_part('partials/content', 'archive'); ?>
			<?php endwhile; ?>
			<div class="col-12 text-center">
				<?php the_posts_navigation(); ?>
			</div>		
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>