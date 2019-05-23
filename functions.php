<?php
//Add the parent theme styles and the child theme styles

function my_theme_enqueue_styles() {

    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'chlid-style', get_stylesheet_directory_uri() . '/css/flash_child.css' );

    if(is_front_page()){
      wp_enqueue_style( 'chlid-home-style', get_stylesheet_directory_uri() . '/css/flash_child_home.css' );
      wp_enqueue_script('youtube-script', get_stylesheet_directory_uri() . '/js/youtube.js', array(),'1.0.0', true);
      wp_enqueue_script('flash-child-parallax-script', get_stylesheet_directory_uri() . '/js/jquery.enllax.min.js', array('jquery'), '1.0.0', true);
      wp_enqueue_script('flash-child-script', get_stylesheet_directory_uri() . '/js/flash_child_home.js', array('jquery'),'1.0.0', true);
    }
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


//Copyright information
function flash_footer_copyright() {
  ?>
    <div class="copyright">
    	<span class="copyright-text">
    		<?php printf( esc_html__( 'Copyright %1$s %2$s', 'flash' ), '&copy; ', date( 'Y' ) ); ?>
    		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
    	</span>
    </div><!-- .copyright -->
  <?php
}

add_action( 'flash_copyright_area', 'flash_footer_copyright' );

//Custom Google fonts
function flash_fonts_url() {

  $fonts_url = '';
  $fonts     = array();
  $subsets   = 'latin,latin-ext';

  $fonts[] = get_theme_mod( 'flash_body_font', 'Oswald:700|Source+Sans+Pro:700&display=swap' );

  if ( $fonts ) {
    $fonts_url = add_query_arg( array(
      'family' => urlencode( implode( '|', $fonts ) ),
      'subset' => urlencode( $subsets ),
    ), 'https://fonts.googleapis.com/css' );
  }

  return $fonts_url;
}

add_action( 'wp_enqueue_scripts', 'flash_fonts_url');
