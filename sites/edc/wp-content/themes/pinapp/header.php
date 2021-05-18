<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
	<meta
		name="description"
		content="<?php bloginfo('description'); ?>"
	>
	<link
		rel="preconnect"
		href="https://fonts.gstatic.com"
	>
	<link
		href="https://fonts.googleapis.com/css2?family=Concert+One&family=Montserrat:wght@200;400;700;900&family=Just+Another+Hand&display=swap"
		rel="stylesheet"
	>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>
	<!-- EDC markup -->
	<header class="main-header">
		<div class="max-width-wrapper">
			<div class="nav-top-wrapper justify-content-center align-items-start align-items-md-center pb-3 pb-md-0">
				<a href="<?php echo(get_site_url()); ?>">
					<img
						class="header-top-logo"
						src="<?php header_image(); ?>"
						alt="logotipo espaço da criança pastora Vanda Nicolau"
					/>
				</a>
				<a href=#>
					<img
						src="<?php echo(get_template_directory_uri()); ?>/assets/img/hamburguer.svg"
						class="menu-mobile-icon icon-sandwich d-md-none position-absolute"
						alt="ícone hamburguer para dispositivos mobile"
					/>
				</a>
				<a href=#>
					<img
						src="<?php echo(get_template_directory_uri()); ?>/assets/img/back-button.svg"
						class="menu-mobile-icon icon-sandwich-back d-md-none position-absolute"
						alt="ícone de fechar do menu"
					/>
				</a>
				<div class="header-right-column">
					<div class="header-contact d-flex mr-3 align-items-center align-items-md-start">
						<img
							src="<?php echo(get_template_directory_uri()); ?>/assets/img/logo-whatsApp.svg"
							class="mt-md-2 mr-2"
							alt="logotipo whatsapp"
						/>
						<div>
							<span class="fs-22 alt-font">estamos no whatsapp</span><br />
							<span class="fs-14">19. 91322.2312</span>
						</div>


					</div>
					<div class="header-contact d-flex flex-wrap justify-content-center align-items-center align-items-md-start">
						<span class="fs-22 alt-font mb-2">nossas redes sociais</span>
						<?php 
							wp_nav_menu(array(
								'theme_location' => 'social-top',
								'container' => false,
								'menu_class' => 'text-center w-100 p-0 m-0' 
							));
						?>
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