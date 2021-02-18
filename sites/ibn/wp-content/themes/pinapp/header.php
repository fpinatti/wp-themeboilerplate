<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
	<meta
		name="description"
		content="<?php bloginfo('description'); ?>"
	>

	<?php wp_head(); ?>
	<link
		rel="preconnect"
		href="https://fonts.gstatic.com"
	>
	<link
		href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;800;900&family=Source+Sans+Pro:wght@300;400;700;900&display=swap"
		rel="stylesheet"
	>
</head>

<body <?php body_class(); ?>>
	<header class="main-header">
		<div class="max-width-wrapper d-flex main-header-middle align-items-center">
			<div class="mobile-menu-cover"></div>
			<a href="<?php echo(get_site_url()); ?>">
				<img
					src="<?php header_image(); ?>"
					height="<?php echo get_custom_header()->height; ?>"
					width="<?php echo get_custom_header()->width; ?>"
					class="header-top-logo position-relative"
				/>
			</a>
			<?php 
				wp_nav_menu(array(
					'theme_location' => 'primary',
					'container' => false,
					'menu_class' => 'top-main-nav alt-font font-weight-bold' 
				));
			?>
			<div class="header-right-column justify-content-center d-md-flex position-relative pr-3 flex-wrap">
				<button class="sandwich-icon d-inline-block d-md-none m-0 p-0">
					<img
						src="<?php echo(get_template_directory_uri()); ?>/assets/img/hamburguer.svg"
						class="m-0 mb-3"
					/>
				</button>
				<nav class="header-social-icons d-md-block m-0 p-0 mb-md-3">
					<a
						href=#
						class="mr-2 ml-2"
					><img
							width="25"
							src="<?php echo(get_template_directory_uri()); ?>/assets/img/twitter-alternative.svg"
						/></a>
					<a
						href=#
						class="mr-2 ml-2"
					><img
							width="25"
							src="<?php echo(get_template_directory_uri()); ?>/assets/img/youtube-alternative.svg"
						/></a>
					<a
						href=#
						class="mr-2 ml-2"
					><img
							width="25"
							src="<?php echo(get_template_directory_uri()); ?>/assets/img/instagram-alternative.svg"
						/></a>
				</nav>

				<div class="headline-contact flex-nowrap d-flex">
					<img
						width="25"
						class="mr-2"
						src="<?php echo(get_template_directory_uri()); ?>/assets/img/whatsapp-light.svg"
					>
					<span class="header-phone d-flex align-items-md-center alt-font">19. 91322.2312</span>
				</div>
			</div>
		</div>



	</header>