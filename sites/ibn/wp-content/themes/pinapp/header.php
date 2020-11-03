<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		
		<div class="container-fluid">
			<div class="row">
				<nav class="navbar navbar-expand-lg navbar-light fixed-top">
					<a class="navbar-brand" href="<?php echo(get_site_url()); ?>">
						<img class="navbar-logo" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
						<!-- <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" alt=""> -->
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
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
			

				<!-- <div class="col-2">
					<a href="#" class="mainnav__logo">Logo here</a>
				</div>
				<nav class="mainnav col-8">
					<?php 
						wp_nav_menu(array(
							'theme_location' => 'primary',
							'container' => false,
							'menu_class' => 'mainnav__menu'
							)
						);
					?>
				</nav>
				<div class="col-2 socialnav text-center">
					<nav class="socialnav__menu">
						<a href="#" class="socialnav__icon"></a>
						<a href="#" class="socialnav__icon"></a>
						<a href="#" class="socialnav__icon"></a>
					</nav>
					<a href="#">19. 99184.3745</a>
				</div> -->
			</div>
		</div><!-- .container -->