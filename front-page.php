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
							<h2>Mezcales de antaño</h2>
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
											Una marca de mezcal joven con un espíritu viejo.
											Nuestro mezcal nace de las entrañas de la tierra de oaxaca
											y es hecho por manos mexicanas de manera artesanal.
											Los mejores mezcales de antaño, una tradición pasada
											de generación en generación de mezcaleros y traída hasta
											el día de hoy para un público joven.
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
									<h2>Mezcal artesanal de autor</h2>
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
