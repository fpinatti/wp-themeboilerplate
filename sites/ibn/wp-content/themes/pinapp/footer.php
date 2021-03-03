	<footer class="main-footer text-center text-white">
		<span class="deco-stripe"></span>
		<div class="pt-5 pb-5">
			<?php 
			wp_nav_menu(array(
					'theme_location' => 'social-footer',
					'container' => false,
					'menu_class' => 'd-flex justify-content-center align-items-center mb-3 p-0' 
				));
			?>
			Av das Nações, 100 – Valinhos – SP – Brasil
		</div>

	</footer>
	<?php wp_footer(); ?>
	</body>

	</html>