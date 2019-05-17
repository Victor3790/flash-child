<?php
//Add the parent theme styles and he child theme styles

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_styles() {

    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'chlid-style', get_stylesheet_directory_uri() . '/css/flash_child_custom.css' );
    wp_enqueue_style( 'swiper-style', get_template_directory_uri() . '/css/swiper.min.css');
    wp_enqueue_style( 'custom_font', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700');
    wp_enqueue_style( 'custom_font_header', 'https://fonts.googleapis.com/css?family=Oswald:700&display=swap');
    wp_enqueue_script( 'swiper-script', get_template_directory_uri() . '/js/swiper.jquery.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('flash-child-script', get_stylesheet_directory_uri() . '/js/flash_child_custom.js', array('jquery'),'1.0.0', true);
    wp_enqueue_script('flash-child-parallax-script', get_stylesheet_directory_uri() . '/js/jquery.enllax.min.js', array('jquery'), '1.0.0', true);
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
