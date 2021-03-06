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
							<div id="hero-message">
								<h1>MEZCAL JOVEN VIEJO</h1>
								<p>
									Desde el corazón de los agaves y desde el nuestro hacemos
									tuyo un mezcal con digno significado.
								</p>
							</div>
						</div>

							<div class="tg-container">
								<?php
								/**
								 * flash_before_body_content hook
								 */
								do_action( 'flash_before_body_content' ); ?>

								<div id="filosofia">
									<div class="texto">
										<h2>Quiénes somos</h2>
										<p>
											Somos una marca cooperativa de mezcales de autor presentada por las
											maestras y los maestros mezcaleros originarios de Oaxaca,
											 México que elaboramos destilados artesanales y ancestrales
											  con variedades Espadín y Silvestres como: Arroqueño,
												Bicuixe, Madrecuixe, Mexicano, Tepeztate, Tobalá y en
												momentos únicos ofrecemos Ediciones Especiales de Jabalí
												y Destilado Cucharilla
										</p>
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
								<h2>Hecho desde el corazón</h2>
								<p>
									Los maestros y las maestras somos especialistas en la variedad
									de agave usada para la elaboración de cada destilado.
									En el proceso empleamos agua de los manantiales de nuestras
									comunidades en Oaxaca; tahonas para molienda de cantera
									talladas a mano, ollas de barro y tinas de fermentación
									únicamente artesanales. Al final envasamos y etiquetamos
									con especial cuidado una a una las botellas que con mucho
									cariño llevan impresa la firma de su autora o autor quienes
									trabajamos a través de la herencia de nuestros antepasados
									a través de ésta bebida cultural.
								</p>
								<div id="player">
									<i id="load" class="fa fa-youtube-play"></i>
								</div>
							</div>

							<div id="contacto">
								<h2>Contacto</h2>
								<p>Teléfono: (951) 4268312</p>
								<p>contacto@mezcaljovenviejo.com</p>
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
