<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Flash
 */

 /**
 * Extra code for an html social menu widget
 *<div id="social">
 * <h4>Síguenos</h4>
 * <a href="#"><i class="fa fa-facebook"></i></a>
 * <a href="#"><i class="fa fa-instagram"></i></a>
 *</div>
 *
 *
 */

?>

<?php if(!is_front_page()) : ?>
		</div><!-- .tg-container -->
	</div><!-- #content -->
<?php endif; ?>


	<?php
	/**
	 * flash_after_main hook
	 */
	do_action( 'flash_after_main' ); ?>

	<?php
	/**
	 * flash_before_footer hook
	 */
	do_action( 'flash_before_footer' ); ?>

	<footer id="colophon" class="footer-layout site-footer" role="contentinfo">
		<?php get_sidebar( 'footer' ); ?>

		<div id="bottom-footer">
			<div class="tg-container">

					<?php do_action( 'flash_copyright_area' ); ?>

					<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'footer-menu', 'fallback_cb' => false, ) ); ?>

			</div>
		</div>
	</footer><!-- #colophon -->

	<?php
	/**
	 * flash_after_footer hook
	 */
	do_action( 'flash_after_footer' ); ?>

	<?php if ( get_theme_mod( 'flash_disable_back_to_top', '' ) != 1 ) : ?>
	<a href="#masthead" id="scroll-up"><i class="fa fa-chevron-up"></i></a>
	<?php endif; ?>
</div><!-- #page -->

<?php
/**
 * flash_after hook
 */
do_action( 'flash_after' ); ?>

<?php wp_footer(); ?>

</body>
</html>
