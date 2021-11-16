<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package learn
 */

?>

<?php wp_footer(); ?>

<!-- Footer
============================================= -->
<footer id="footer" class="dark">

	<!-- Copyrights
	============================================= -->
	<div id="copyrights">

		<div class="container clearfix">

			<div class="col_half">
				<?php echo wp_kses_post( site\footer\copyright() ); ?> &copy; <?php echo esc_html( date('Y') )?><br>
				<?php echo wp_kses_post( site\footer\get_menu() ); ?>
			</div>

			<div class="col_half col_last tright">
                
                <?php echo wp_kses_post( site\footer\social_links() );?>

				<div class="clear"></div>
				
				<?php echo wp_kses_post( site\footer\footer_contacts() );?>
			</div>

		</div>

	</div><!-- #copyrights end -->

</footer><!-- #footer end -->

</div><!-- #wrapper end -->

</body>
</html>
