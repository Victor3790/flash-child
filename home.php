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

	<?php
	/**
	 * flash_before_body_content hook
	 */
	do_action( 'flash_before_body_content' ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- Slider main container -->
			<div class="swiper-container">
			    <!-- Additional required wrapper -->
			    <div class="swiper-wrapper">
			        <!-- Slides -->
			        <div class="swiper-slide">Slide 1</div>
			        <div class="swiper-slide">Slide 2</div>
			        <div class="swiper-slide">Slide 3</div>
			        ...
			    </div>
			    <!-- If we need pagination -->
			    <!-- <div class="swiper-pagination"></div> -->

			    <!-- If we need navigation buttons -->
			    <div class="swiper-button-prev"></div>
			    <div class="swiper-button-next"></div>

			    <!-- If we need scrollbar -->
			    <!-- <div class="swiper-scrollbar"></div> -->
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php
	/**
	 * flash_after_body_content hook
	 */
	do_action( 'flash_after_body_content' ); ?>

<?php

get_footer();
