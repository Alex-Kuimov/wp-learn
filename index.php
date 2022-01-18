<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package learn
 */

get_header();
?>

	<section id="page-title">
		<div class="container clearfix">
			<h1>Blog</h1>
			<span>Our Latest News in Masonry Layout</span>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Blog</li>
			</ol>
		</div>

	</section><!-- #page-title end -->
	<section id="content">

	<div class="content-wrap">
		<div class="container clearfix">
			<div id="posts" class="post-grid grid-container post-masonry grid-3 clearfix">
				<?php
				if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			</div>
		</div>
	</div>

    </section>
<?php

get_footer();
