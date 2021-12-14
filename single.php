<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package learn
 */

get_header();
?>

<section id="page-title">

	<div class="container clearfix">
		<h1><?php echo esc_html( get_the_title() ); ?></h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Blog</a></li>
			<li class="breadcrumb-item active" aria-current="page">Blog Single</li>
		</ol>
	</div>

</section><!-- #page-title end -->

<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="postcontent nobottommargin clearfix">
				<div class="single-post nobottommargin">
					<div class="entry clearfix">
						<?php
						while ( have_posts() ) :
							the_post();
							?>
							<div class="entry-image">
								<a href="#"><img src="images/about.jpg" alt="Blog Single"></a>
							</div>
							<div class="entry-content notopmargin">
								<?php the_content(); ?>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
