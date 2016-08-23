<?php
	/**
	 * The template for displaying the footer
	 *
	 * Contains the closing of the #content div and all content after
	 *
	 * @package    WordPress
	 * @subpackage wcdbabysixteen
	 */
?>

</div><!-- .site-content -->

<footer id="colophon" class="site-footer" role="contentinfo">

	<?php if ( has_nav_menu( 'social' ) ) : ?>
		<nav class="social-navigation social-navigation-footer" role="navigation"
		     aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'social',
					'menu_class'     => 'social-links-menu',
					'depth'          => 1,
					'link_before'    => '<span class="screen-reader-text">',
					'link_after'     => '</span>',
				) );
			?>
		</nav><!-- .social-navigation -->
	<?php endif; ?>

	<div class="site-info">
		<div class="design-credits-wrapper">
			<a class="site-credits" href="<?php echo esc_url( home_url( '/' ) ); ?>"
			   title="Copyright <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" target="_blank"
			   alt="Copyright <?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' );
					echo ' &copy; ' . date( 'Y' ); ?> </a>
			<br>
			<a class="site-design-credits"
			   href="<?php echo esc_url( __( 'https://wordpress.org/', 'wcdbabysixteen' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'wcdbabysixteen' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<a class="site-design-credits"
			   href="<?php echo esc_url( __( 'https://www.webcodesigns.com/', 'wcdbabysixteen' ) ); ?>"><?php printf( esc_html__( 'Designed by %s', 'wcdbabysixteen' ), 'Web Code Designs' ); ?></a>
		</div>
	</div><!-- .site-info -->
</footer><!-- .site-footer -->
</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
