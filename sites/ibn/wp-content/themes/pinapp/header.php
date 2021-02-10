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
			<!-- <nav class="top-main-nav justify-content-md-end d-none d-md-flex alt-font">
				<a
					href=#
					class="nav-menu-item"
				>Menu item 1</a>
				<a
					href=#
					class="nav-menu-item active"
				>Menu item 1</a>
				<a
					href=#
					class="nav-menu-item"
				>Menu item 1</a>
				<a
					href=#
					class="nav-menu-item"
				>Menu item 1</a>
				<a
					href=#
					class="nav-menu-item"
				>Menu item 1</a>
				<a
					href=#
					class="nav-menu-item"
				>Menu item 1</a>
			</nav> -->

			<div class="header-right-column justify-content-center d-md-flex position-relative">
				<button class="sandwich-icon d-inline-block d-md-none m-0 p-0"><img
						src="<?php echo(get_template_directory_uri()); ?>/assets/img/hamburguer.svg"
						class="m-0"
					/></button>
				<nav class="header-social-icons d-md-block m-0 p-0">
					<a
						href=#
						class="socialnav__icon"
					><img
							src="<?php echo(get_template_directory_uri()); ?>/assets/img/icon-instagram.svg"
							class="socialnav__icon-img"
						/></a>
					<a
						href=#
						class="socialnav__icon"
					><img
							src="<?php echo(get_template_directory_uri()); ?>/assets/img/icon-instagram.svg"
							class="socialnav__icon-img"
						/></a>
					<a
						href=#
						class="socialnav__icon"
					><img
							src="<?php echo(get_template_directory_uri()); ?>/assets/img/icon-instagram.svg"
							class="socialnav__icon-img"
						/></a>
				</nav>

				<div class="headline-contact">
					<span class="header-phone d-flex align-items-md-center">19. 91322.2312</span>
				</div>
			</div>
		</div>



	</header>
	<!-- <div class="container-fluid">
			<div class="row">
				<nav class="main-navigation fixed-top">
					<a class="navbar-brand" href="<?php echo(get_site_url()); ?>">
						<img class="navbar-logo" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="navbar-collapse" id="navbarNav">
						<?php 
							wp_nav_menu(array(
								'theme_location' => 'primary',
								'container' => false,
								'menu_class' => 'navbar-nav' 
							));
						?>
						<nav class="socialnav__menu col-12 socialnav d-block d-lg-none p-0 mt-3">
							<a href="#" class="socialnav__icon">
								<img src="<?php echo(get_template_directory_uri()); ?>/assets/img/icon_facebook.png"/>
							</a>
							<a href="#" class="socialnav__icon">
								<img src="<?php echo(get_template_directory_uri()); ?>/assets/img/icon_facebook.png"/>
							</a>
							<a href="#" class="socialnav__icon">
								<img src="<?php echo(get_template_directory_uri()); ?>/assets/img/icon_facebook.png"/>
							</a>
						</nav>
						<a href="#" class="col-12 d-block d-lg-none p-0">
							19. 99184.3745
						</a>
					</div>
					<div class="col-2 socialnav d-none d-lg-block">
						<nav class="socialnav__menu">
							<a href="#" class="socialnav__icon">
								<img src="<?php echo(get_template_directory_uri()); ?>/assets/img/icon_facebook.png"/>
							</a>
							<a href="#" class="socialnav__icon">
								<img src="<?php echo(get_template_directory_uri()); ?>/assets/img/icon_facebook.png"/>
							</a>
							<a href="#" class="socialnav__icon">
								<img src="<?php echo(get_template_directory_uri()); ?>/assets/img/icon_facebook.png"/>
							</a>
						</nav>
						<a href="#">19. 99184.3745</a>
					</div>
				</nav>
	
			</div>
		</div> -->