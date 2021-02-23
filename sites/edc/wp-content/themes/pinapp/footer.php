	<footer class="main-footer position-relative">
		<div
			class="position-absolute w-100 d-flex align-items-end justify-content-between cmw-1200 mx-auto"
			style="transform: translate(-50%, -100%);left: 50%;"
		>
			<div class="align-items-end d-flex">
				<img
					class="footer-mom-kid"
					src="<?php echo(get_template_directory_uri()); ?>/assets/img/footer-kid.svg"
				/>
				<img src="<?php echo(get_template_directory_uri()); ?>/assets/img/footer-mommy.svg" />
			</div>
			<div>
				<img src="<?php echo(get_template_directory_uri()); ?>/assets/img/footer-family.svg" />
			</div>
		</div>
		<div
			class="max-width-wrapper d-flex flex-wrap flex-md-nowrap align-items-start align-items-md-center justify-content-center">
			<a href="<?php echo(get_site_url()); ?>">
				<img
					class="footer-nav logo-footer ml-4 mr-4 mt-md-1"
					src="<?php header_image(); ?>"
					alt=""
				/>
			</a>
			<?php 
				wp_nav_menu(array(
					'theme_location' => 'primary',
					'container' => false,
					'menu_class' => 'footer-menu column-center pt-4 pb-4 pt-md-0 pb-md-0 pl-0 text-center fs-12' 
				));
			?>
			<div class="column-right pt-4 justify-content-center text-white text-center text-md-left pl-5">
				<span class="mb-3 alt-font d-block fs-14">entre em contato</span>
				<div class="footer-small-box-columns justify-content-center justify-content-md-start">
					<div class="footer-small-box-left">
						<a href=#>
							<img
								src="<?php echo(get_template_directory_uri()); ?>/assets/img/logo-whatsApp.svg"
								class="mb-2 mr-md-2"
							/>
						</a>
					</div>
					<div class="footer-small-box-right mb-4 fs-10 fs-md-11">
						<span class="font-weight-bold d-block">Assistência Social</span>
						<span class="mb-1 d-block">19 3829-1866</span>
						<span class="font-weight-bold d-block">Secretaria e Administração</span>
						<span class="mb-1 d-block">19 3829-2537</span>
					</div>
				</div>
				<div class="footer-small-box-columns mb-4 justify-content-center justify-content-md-start">
					<div class="footer-small-box-left">
						<a href=#><img
								src="<?php echo(get_template_directory_uri()); ?>/assets/img/location.svg"
								class="mb-2 mr-md-2"
							/></a>
					</div>
					<div class="footer-small-box-right fs-10 fs-md-12">
						<span class="d-block">Avenida Altino Gouveia, 977</span>
						<span class="d-block">Jardim Pinheiros</span>
						<span class="d-block">Valinhos/SP</span>
					</div>
				</div>
			</div>
			<div class="column-right pt-3 pt-md-0 text-center">
				<nav
					class="d-flex flex-nowrap justify-content-center mb-5 pb-3 flex-md-wrap justify-content-md-start d-md-block mb-md-0 pb-md-0">
					<a
						href=#
						class="mr-3 d-flex align-items-center mb-md-4 text-white fs-10"
					><img
							src="<?php echo(get_template_directory_uri()); ?>/assets/img/logo-instagram.svg"
							class="mr-2"
						/> espacodacrianca</a>
					<a
						href=#
						class="d-flex align-items-center text-white fs-10"
					><img
							src="<?php echo(get_template_directory_uri()); ?>/assets/img/logo-facebook.svg"
							class="mr-2"
						/> espacodacrianca</a>
				</nav>
			</div>
		</div>

	</footer>
	<?php wp_footer(); ?>
	</body>

	</html>