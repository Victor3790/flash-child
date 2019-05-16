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

<?php get_template_part('includes/slider'); ?>

<div id="content" class="site-content">
	<div class="tg-container">
	<?php
	/**
	 * flash_before_body_content hook
	 */
	do_action( 'flash_before_body_content' ); ?>
	<main>
		<div id="primary" class="content-area">
			<div id="main" class="site-main" role="main">

				<div id="filosofia">
					<div class="texto">
						<h2>Filosofía</h2>
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
					<div class="imagen">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/filosofia.jpg" alt="">
					</div>
				</div>
			</div><!-- #main -->
		</div><!-- #primary -->
	</main>
	<?php
	/**
	 * flash_after_body_content hook
	 */
	do_action( 'flash_after_body_content' ); ?>

	</div><!-- .tg-container -->
</div><!-- #content -->

<div id="mensaje" data-enllax-ratio="0.2">
	<div class="tg-container">
		<div class="content">
			<h2>Sólo para paladares conocedores</h2>
			<h3>Mezcal 100% mexicano</h3>
		</div>
	</div>
</div>

<div id="productos">
	<div class="tg-container">
		<div class="content">
			<h2>Nuestros productos</h2>
			<div class="catalogo">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/p1.jpg" alt="">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/p2.jpg" alt="">
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
?>
