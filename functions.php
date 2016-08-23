<?php
	/**
	 * The child theme functions file, this file extends the twentysixteen functions file
	 *
	 * @package    WordPress
	 * @subpackage wcdbabysixteen
	 */


	// Backwards compatibility for custom logo
	function wcdbabysixteen_the_custom_logo() {

		// If custom logo exists, get it
		$output = '';
		if ( function_exists( 'get_custom_logo' ) ) {
			$output = get_custom_logo();
		}
		$description = get_bloginfo( 'description', 'display' );

		// No logo so display site name and description
		if ( is_front_page() && is_home() ) {
			if ( empty( $output ) ) {
				$output = '<h1 class="site-title" ><a href="' . esc_url( home_url( '/' ) ) . '" rel="home">' . get_bloginfo( 'name' ) . '</a></h1>' . '<p class="site-description">' . $description . '</p>';
			}
		} else {
			if ( empty( $output ) ) {
				$output = '<p class="site-title navbar-brand" ><a href="' . esc_url( home_url( '/' ) ) . '" rel="home">' . get_bloginfo( 'name' ) . '</a></p>' . '<p class="site-description">' . $description . '</p>';
			}
		}
		echo $output;
	}

	add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
	function enqueue_parent_styles() {
		wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	}