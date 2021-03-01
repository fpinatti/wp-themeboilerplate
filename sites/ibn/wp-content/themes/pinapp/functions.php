<?php
/*
	==========================================
	 Include scripts
	==========================================
*/
function pinapp_script_enqueue() {
	//css
	wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/normalize.css');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('bootstrap-grid', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css');
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/assets/css/main.css');
	//js
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/assets/js/main.js');
	
}

add_action( 'wp_enqueue_scripts', 'pinapp_script_enqueue');

/*
	==========================================
	 Activate menus
	==========================================
*/
function pinapp_theme_setup() {
	
	add_theme_support('menus');
	
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
	
}

add_action('init', 'pinapp_theme_setup');

/*
	==========================================
	 Theme support function
	==========================================
*/

add_theme_support( 'responsive-embeds' );
add_theme_support( 'custom-line-height' );
add_theme_support( 'experimental-link-color' );
add_theme_support( 'custom-spacing' );
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support( 'wp-block-styles' );
add_theme_support( 'align-wide' );
add_theme_support('post-formats',array('aside','image','video'));
add_theme_support(
	'html5',
	array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
		'navigation-widgets',
	)
);


add_image_size('large-img', 1000, 702);
add_image_size('medium-img', 700, 372);
add_image_size('small-img', 300, 200);





function posts_link_next_class($format){
	$format = str_replace('href=', 'class="next btn btn-primary" href=', $format);
	return $format;
}
add_filter('next_post_link', 'posts_link_next_class');

function posts_link_prev_class($format) {
	$format = str_replace('href=', 'class="prev btn btn-primary" href=', $format);
	return $format;
}
add_filter('previous_post_link', 'posts_link_prev_class');





function remove_img_attr ($html) {
    return preg_replace('/(width|height)="\d+"\s/', "", $html);
}

add_filter( 'post_thumbnail_html', 'remove_img_attr' );
add_filter( 'image_send_to_editor', 'remove_img_attr', 10 );


/*
	==========================================
	 Sidebar function
	==========================================
*/
function pinapp_widget_setup() {
	
	register_sidebar(
		array(	
			'name'	=> 'Sidebar',
			'id'	=> 'sidebar-1',
			'class'	=> 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
	
}
add_action('widgets_init','pinapp_widget_setup');

/*
	==========================================
	 Head function
	==========================================
*/
function pinapp_remove_version() {
	return '';
}
add_filter('the_generator', 'pinapp_remove_version');

/*
	==========================================
	 Custom Post Type
	==========================================
*/
function pinapp_custom_post_type (){
	
	$labels = array(
		'name' => 'Portfolio',
		'singular_name' => 'Portfolio',
		'add_new' => 'Add Item',
		'all_items' => 'All Items',
		'add_new_item' => 'Add Item',
		'edit_item' => 'Edit Item',
		'new_item' => 'New Item',
		'view_item' => 'View Item',
		'search_item' => 'Search Portfolio',
		'not_found' => 'No items found',
		'not_found_in_trash' => 'No items found in trash',
		'parent_item_colon' => 'Parent Item'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		//'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('portfolio',$args);
}
add_action('init','pinapp_custom_post_type');

function pinapp_custom_taxonomies() {
	
	//add new taxonomy hierarchical
	$labels = array(
		'name' => 'Fields',
		'singular_name' => 'Field',
		'search_items' => 'Search Fields',
		'all_items' => 'All Fields',
		'parent_item' => 'Parent Field',
		'parent_item_colon' => 'Parent Field:',
		'edit_item' => 'Edit Field',
		'update_item' => 'Update Field',
		'add_new_item' => 'Add New Work Field',
		'new_item_name' => 'New Field Name',
		'menu_name' => 'Fields'
	);
	
	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'field' )
	);
	
	register_taxonomy('field', array('portfolio'), $args);
	
	//add new taxonomy NOT hierarchical
	
	register_taxonomy('software', 'portfolio', array(
		'label' => 'Software',
		'rewrite' => array( 'slug' => 'software' ),
		'hierarchical' => false
	) );
	
}

add_action( 'init' , 'pinapp_custom_taxonomies' );

/*
	==========================================
	Custom Term Function
	==========================================
*/

function pinapp_get_terms( $postID, $term ){
	
	$terms_list = wp_get_post_terms($postID, $term); 
	$output = '';
					
	$i = 0;
	foreach( $terms_list as $term ){ $i++;
		if( $i > 1 ){ $output .= ', '; }
		$output .= '<a href="' . get_term_link( $term ) . '">'. $term->name .'</a>';
	}
	
	return $output;
	
}





















