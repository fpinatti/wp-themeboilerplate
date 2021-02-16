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
			href="<?php esc_url( the_permalink()); ?>"
			class="btn btn-primary"
		>Acessar</a>
	</div>

</article>