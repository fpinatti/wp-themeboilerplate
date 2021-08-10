	<footer class="main-footer position-relative">
		<h6 class="footer-headline-xs d-block d-md-none text-center w-100 alt-font fs-28">UM PROJETO DO CORAÇÃO DE DEUS</h6>
		<div
			class="position-absolute w-100 d-flex align-items-end justify-content-between cmw-1200 mx-auto"
			style="transform: translate(-50%, -100%);left: 50%;"
		>
			<div class="align-items-end d-flex">
				<img
					class="footer-mom-kid"
					alt="ícone bebê nos braços da mãe"
					src="<?php echo(get_template_directory_uri()); ?>/assets/img/footer-kid.svg"
				/>
				<img 
					src="<?php echo(get_template_directory_uri()); ?>/assets/img/footer-mommy.svg" 
					alt="ícone mãe com bebê nos braços"
				/>
			</div>
			<h6 class="footer-headline-md d-none d-md-block text-center w-100 alt-font fs-36">UM PROJETO DO CORAÇÃO DE DEUS</h6>
			<div>
				<img 
					src="<?php echo(get_template_directory_uri()); ?>/assets/img/footer-family.svg" 
					alt="ícone de uma família"
				/>
			</div>
		</div>
		<div
			class="max-width-wrapper d-flex flex-wrap flex-md-nowrap align-items-start align-items-md-center justify-content-center">
			<a href="<?php echo(get_site_url()); ?>">
				<img
					class="footer-nav logo-footer ml-4 mr-4 mt-md-1"
					src="<?php header_image(); ?>"
					alt="logotipo espaço da criança pastora Vanda Nicolau"
				/>
			</a>
			<?php 
				wp_nav_menu(array(
					'theme_location' => 'primary',
					'container' => false,
					'menu_class' => 'footer-menu column-center pt-4 pb-4 pt-md-0 pb-md-0 pl-0 text-center fs-12' 
				));
			?>
			<div class="column-right pt-4 justify-content-center text-white text-center text-md-left pl-md-5 wrapper-footer-contact">
				<span class="mb-3 alt-font d-block fs-22">entre em contato</span>
				<div class="footer-small-box-columns justify-content-center justify-content-md-start">
					<div class="footer-small-box-left">
						<a href=#>
							<img
								src="<?php echo(get_template_directory_uri()); ?>/assets/img/logo-whatsApp.svg"
								class="mb-2 mr-md-2"
								alt="logotipo whatsapp"
							/>
						</a>
					</div>
					<div class="footer-small-box-right mb-4 fs-10 fs-md-11">
						<span class="font-weight-bold d-block">Assistente Social</span>
						<span class="mb-1 d-block">
							<a href="https://api.whatsapp.com/send?phone=+55(19)3829-2537" target="_blank">
								19 3829.2537
							</a>
						</span>
						<span class="font-weight-bold d-block">Secretaria e Administração</span>
						<span class="mb-1 d-block">
							<a href="tel://551938291896">19 3829.1896</a>
						</span>
					</div>
				</div>
				<div class="footer-small-box-columns mb-4 justify-content-center justify-content-md-start">
					<div class="footer-small-box-left">
						<a href=#><img
								src="<?php echo(get_template_directory_uri()); ?>/assets/img/location.svg"
								class="mb-2 mr-md-2"
								alt="ícone localização"
							/></a>
					</div>
					<div class="footer-small-box-right fs-10 fs-md-12">
						<a href="https://goo.gl/maps/dhqtVJ3XCVxyKtVaA" target="_blank">
							<span class="d-block">Av. Dr. Altino Gouveia, 977</span>
							<span class="d-block">Jd. Pinheiros</span>
							<span class="d-block">Valinhos/SP</span>
						</a>
					</div>
				</div>
			</div>
			<div class="column-right pt-3 pt-md-0 text-center">
				<?php 
					wp_nav_menu(array(
						'theme_location' => 'social-footer',
						'container' => false,
						'menu_class' => 'd-flex flex-nowrap justify-content-center mb-5 pb-3 flex-md-wrap justify-content-md-start d-md-block mb-md-0 pb-md-0 pl-0' 
					));
				?>	
			
			</div>
		</div>

	</footer>
	<?php wp_footer(); ?>
	</body>

	</html>