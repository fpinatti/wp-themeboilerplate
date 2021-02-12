	<footer class="main-footer position-relative">
		<div
			class="position-absolute w-100 d-flex align-items-end justify-content-between cmw-1200 mx-auto"
			style="transform: translate(-50%, -100%);left: 50%;"
		>
			<div>
				<img src="<?php echo(get_template_directory_uri()); ?>/assets/img/footer-kid.png" />
				<img src="<?php echo(get_template_directory_uri()); ?>/assets/img/footer-mom.png" />
			</div>
			<div>
				<img src="<?php echo(get_template_directory_uri()); ?>/assets/img/footer-family.png" />
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
					'menu_class' => 'footer-menu column-center pt-4 pb-4 pt-md-0 pb-md-0 pl-0 text-center' 
				));
			?>
			<div class="column-right pt-4 justify-content-center text-white">
				<span class="mb-3 alt-font d-block">entre em contato</span>
				<div class="footer-small-box-columns justify-content-center">
					<div class="footer-small-box-left">
						<a href=#>
							<img
								src="<?php echo(get_template_directory_uri()); ?>/assets/img/WhatsApp.png"
								class="social-icon mb-3 mr-md-2"
							/>
						</a>
					</div>
					<div class="footer-small-box-right mb-5">
						Assistência Social<br />
						19 3829-1866<br />
						Secretaria e Administração<br />
						19 3829-2537
					</div>
				</div>
				<div class="footer-small-box-columns mb-4 justify-content-center">
					<div class="footer-small-box-left">
						<a href=#><img
								src="<?php echo(get_template_directory_uri()); ?>/assets/img/WhatsApp.png"
								class="social-icon mb-3 mr-md-2"
							/></a>
					</div>
					<div class="footer-small-box-right">
						Avenida Altino Gouveia, 977<br />
						Jardim Pinheiros<br />
						Valinhos/SP
					</div>
				</div>
			</div>
			<div class="column-right pt-5">
				<nav
					class="d-flex flex-nowrap justify-content-center mb-5 pb-3 flex-md-wrap justify-content-md-start d-md-block">
					<a
						href=#
						class="mr-3 d-flex align-items-center mb-md-4 text-white"
					><img
							src="<?php echo(get_template_directory_uri()); ?>/assets/img/logo-facebook.png"
							class="social-icon mr-2"
						/> espacodacrianca</a>
					<a
						href=#
						class="d-flex align-items-center text-white"
					><img
							src="<?php echo(get_template_directory_uri()); ?>/assets/img/logo-facebook.png"
							class="social-icon mr-2"
						/> espacodacrianca</a>
				</nav>
			</div>
		</div>

	</footer>
	<?php wp_footer(); ?>
	</body>

	</html>