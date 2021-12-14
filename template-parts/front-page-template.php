<?php
/*
Template Name: Front Page
 */

get_header();
?>

<section id="content">

	<div class="content-wrap">

		<?php echo site\Front_Page::instance()->get_section_about(); ?>

		<?php echo site\Front_Page::instance()->get_section_2(); ?>

		<?php echo site\Front_Page::instance()->get_section_possibilities(); ?>

        <?php echo site\Front_Page::instance()->get_section_our_works(); ?>

		<?php echo site\Front_Page::instance()->get_section_blog(); ?>

		<?php echo site\Front_Page::instance()->get_section_team(); ?>

		<?php echo site\Front_Page::instance()->get_section_clients(); ?>

	</div>

</section><!-- #content end -->

<?php get_footer();
