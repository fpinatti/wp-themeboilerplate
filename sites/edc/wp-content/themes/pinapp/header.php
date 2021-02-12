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
		href="https://fonts.googleapis.com/css2?family=Concert+One&family=Montserrat:wght@200;400;700;900&display=swap"
		rel="stylesheet"
	>
</head>

<body <?php body_class(); ?>>

	<!-- EDC markup -->
	<header class="main-header">
		<div class="max-width-wrapper">
			<div class="nav-top-wrapper justify-content-center align-items-start align-items-md-center pb-3 pb-md-0">
				<a href="<?php echo(get_site_url()); ?>">
					<img
						class="header-top-logo"
						src="<?php header_image(); ?>"
						alt=""
					/>
				</a>

				<img
					src="<?php echo(get_template_directory_uri()); ?>/assets/img/sandwich-icon.png"
					class="sandwich-icon d-md-none"
				/>
				<div class="header-right-column">
					<div class="header-contact d-flex mr-3 align-items-center">
						<img
							src="<?php echo(get_template_directory_uri()); ?>/assets/img/WhatsApp.png"
							class="social-icon m-2"
						/>
						<div>
							<strong>estamos no whatsapp</strong><br />
							19. 91322.2312
						</div>


					</div>
					<div class="header-contact d-flex flex-wrap justify-content-center align-items-center">
						<strong>nossas redes sociais</strong>
						<nav class="text-center w-100">
							<a href=#><img
									src="<?php echo(get_template_directory_uri()); ?>/assets/img/logo-facebook.png"
									class="social-icon"
								/></a>
							<a href=#><img
									src="<?php echo(get_template_directory_uri()); ?>/assets/img/logo-facebook.png"
									class="social-icon"
								/></a>
							<a href=#><img
									src="<?php echo(get_template_directory_uri()); ?>/assets/img/logo-facebook.png"
									class="social-icon"
								/></a>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<div class="top-main-nav-wrapper d-none d-md-flex">
			<?php 
				wp_nav_menu(array(
					'theme_location' => 'primary',
					'container' => false,
					'menu_class' => 'top-main-nav max-width-wrapper text-right justify-content-end d-md-flex' 
				));
			?>
		</div>

	</header>