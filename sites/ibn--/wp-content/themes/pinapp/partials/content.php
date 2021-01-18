<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
	$custom = get_post_custom_values($key = 'blocks');
	if(in_array('fluid', $custom)): ?>
	<div class="container-fluid">
	<?php else: ?>
	<div class="container">
	<?php endif; ?>
		<div class="row">
			<div class="col-12">
	<?php the_content(); ?>
			</div>
		</div>
	</div>
</article>