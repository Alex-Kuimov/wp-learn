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
				
				<?php echo site\Footer::instance()->copyright(); ?> &copy; <?php echo esc_html( date('Y') )?><br>
				<?php echo site\Footer::instance()->get_menu(); ?>
			</div>

			<div class="col_half col_last tright">
				
				<?php echo site\Footer::instance()->social_links(); ?>
    
				<div class="clear"></div>
				
				<?php echo site\Footer::instance()->footer_contacts(); ?>
			</div>

		</div>

	</div><!-- #copyrights end -->

</footer><!-- #footer end -->

</div><!-- #wrapper end -->

</body>
</html>
