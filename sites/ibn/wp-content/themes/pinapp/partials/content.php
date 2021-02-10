<section
	id="post-<?php the_ID(); ?>"
	<?php post_class(get_post_custom_values($key = 'custom-css')); ?>
>
	<?php 
	$custom = get_post_custom_values($key = 'blocks'); ?>
	<?php the_content(); ?>
</section>