<?php
//Add the parent theme's styles

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_styles() {

    $parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

}


//Copyright information

if ( ! function_exists( 'child_flash_footer_copyright' ) ) :
/**
 * Footer Copyright Text.
 *
 * @since Flash 1.0
 */
function child_flash_footer_copyright() {
	?>
<div class="copyright">
	<span class="copyright-text">
		<?php printf( esc_html__( 'Copyright %1$s %2$s', 'flash' ), '&copy; ', date( 'Y' ) ); ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
	</span>
</div><!-- .copyright -->
<?php
}
endif;

add_action( 'child_flash_copyright_area', 'child_flash_footer_copyright' );
