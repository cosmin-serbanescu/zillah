<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zillah
 */

?>

		</div><!-- .container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container container-footer">

			<div class="footer-inner">
				<div class="row">
					<div class="col-sm-4">
						<?php 
						if ( is_active_sidebar( 'zillah-footer-widget-area' ) ) {
							dynamic_sidebar( 'zillah-footer-widget-area' );
						}?>
					</div>
					
					<div class="col-sm-4">
						<?php
						if ( is_active_sidebar( 'zillah-footer-widget-area-2' ) ) {
							dynamic_sidebar( 'zillah-footer-widget-area-2' );
						} ?>
					</div>

					<div class="col-sm-4">
						<?php
						if ( is_active_sidebar( 'zillah-footer-widget-area-3' ) ) {
							dynamic_sidebar( 'zillah-footer-widget-area-3' );
						} ?>
					</div>
				</div>
			</div>

			<div class="site-info">
			
				<?php printf(
					__( 'Proudly powered by %1$s', 'zillah' ),
					sprintf( '<a href="http://wordpress.org/" rel="nofollow">%s</a>', esc_html__( 'WordPress', 'zillah' ) )
				); ?>
				<span class="sep"> | </span>
				<?php printf(
					__( 'Theme %1$s by %2$s', 'zillah' ),
					sprintf( '<a href="http://themeisle.com/themes/zillah/" rel="nofollow">%s</a>', esc_html__( 'Zillah', 'zillah' ) ),
					sprintf( '<a href="http://themeisle.com/" rel="nofollow">%s</a>', esc_html__( 'Themeisle', 'zillah' ) )
				); ?>
				
				
			</div><!-- .site-info -->



		</div><!-- .container-footer -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>