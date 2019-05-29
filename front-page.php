<?php
/**
 * Landing page
 *
 * Landing page for the project mezcal joven viejo.
 *
 *
 * @package Flash
 */

get_header(); ?>
<div id="aviso">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logoPortada.png" alt="">
	<div id="pregunta">
		<h2>¿Eres mayor de edad?</h2>
	</div>
	<div id="botones">
		<div id="si" class="boton">
			<h3>Sí</h3>
		</div>
		<div id="no" class="boton">
			<a href="http://www.alcoholinformate.org.mx"><h3>No</h3></a>
		</div>
	</div>
</div>

<div id="content" class="site-content">
			<div id="primary" class="content-area">
				<div id="main" class="site-main" role="main">
					<main>

						<div id="hero">
							<h1>MEZCAL JOVEN VIEJO</h1>
							<h2>Una tradición milenaria</h2>
						</div>

							<div class="tg-container">
								<?php
								/**
								 * flash_before_body_content hook
								 */
								do_action( 'flash_before_body_content' ); ?>

								<div id="filosofia">
									<div class="texto">
										<h2>MEZCAL JOVEN VIEJO</h2>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
											eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
											enim ad minim veniam, quis nostrud exercitation ullamco laboris
											nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
											reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
											pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
											culpa qui officia deserunt mollit anim id est laborum.
										</p>
									</div>
								</div>

								<div id="botellas">
									<div class="imagenBotella">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arroqueno.jpg" alt="">
									</div>
									<div class="imagenBotella">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bicuishe.jpg" alt="">
									</div>
								</div>

						</div><!--tg-container-->

						<div id="mensaje" data-enllax-ratio="0.2">
							<div class="tg-container">
								<div class="content">
									<h2>Mezcal 100% mexicano</h2>
								</div>
							</div>
						</div>

						<div class="tg-container">
							<div id="video">
								<h2>Hecho por los mejores maestros mezcaleros</h2>
								<div id="player">
								</div>
							</div>

							<div id="contacto">
								<h2>Contacto</h2>
								<p>Teléfono: 595 101 9267</p>
								<p>hola@mezcaljovenviejo.com</p>
								<p>info@mezcaljovenviejo.com</p>
								<p>sales@mezcaljovenviejo.com</p>
							</div>
						</div><!--tg-container-->

					</main>
			</div><!-- #main -->
		</div><!-- #primary -->
	<?php
	/**
	 * flash_after_body_content hook
	 */
	do_action( 'flash_after_body_content' ); ?>

</div><!-- #content -->
<?php
get_footer();
?>
