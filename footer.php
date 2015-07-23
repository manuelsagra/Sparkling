<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sparkling
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .site-content -->

	<div id="footer-area">
		<div class="container footer-inner">
			<div class="row">
				<?php get_sidebar( 'footer' ); ?>
			</div>
		</div>

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info container">
				<div class="row">
					<?php sparkling_social(); ?>
					<nav role="navigation" class="col-md-6">
						<?php sparkling_footer_links(); ?>
					</nav>
					<div class="copyright col-md-6">
						<?php echo of_get_option( 'custom_footer_text', 'sparkling' ); ?>
						<?php sparkling_footer_info(); ?>
					</div>
				</div>
			</div><!-- .site-info -->
			<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
		</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<div id="cookie-law-info-bar"><span>Al usar este sitio acepta el uso de cookies para análisis, contenido personalizado y publicidad. <a href="#" id="cookie_action_close_header" class="medium cli-plugin-button cli-plugin-main-button">Aceptar</a> <a href="/politica-de-cookies/" id="CONSTANT_OPEN_URL" class="cli-plugin-main-link">Saber más</a></span></div>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<?php wp_footer(); ?>

</body>
</html>