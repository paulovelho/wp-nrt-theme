<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Longform
 * @since Longform 1.0
 */
?>

		</div><!-- #main -->

		<div class="site-footer-wrapper">
			<div class="site-footer-container container">
				<footer id="colophon" class="site-footer row" role="contentinfo">
					<?php get_sidebar( 'footer' ); ?>
				</footer><!-- #colophon -->
			</div>
			<div class="site-info col-sm-12 col-md-12 col-lg-12">
				<div class="site-info-content">
					<div class="copyright">
						Produção <a href="http://blog.paulovelho.com.br/" title="Paulo Velho">Paulo Velho <img title="Paulo Velho" alt="Paulo Velho" src="http://nrt.paulovelho.com.br/wp-content/themes/pvnrtheme/images/white_one.png" /></a>
					</div>
					<div class="footer-menu">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer',
									'menu_class'     => 'footer-menu',
									'depth'          => 1
								)
							);
						?>
					</div>
				</div>
				<?php
				$show_scroll_to_top = get_theme_mod('longform_scrolltotop', false);

				if ( $show_scroll_to_top ) {
				?>
					<a class="scroll-to-top" href="#"><?php _e( 'Up', 'longform' ); ?></a>
				<?php
				}
				?>
				<div class="clearfix"></div>
			</div><!-- .site-info -->
			<div class="clearfix"></div>
		</div>
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>