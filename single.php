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
		<h1>Блог детальная</h1>
		<!--<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Blog</a></li>
			<li class="breadcrumb-item active" aria-current="page">Blog Single</li>
		</ol>-->
        <?php wp_learn_breadcrumbs(); ?>
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
                            <div class="entry-title">
								<h2><?php echo esc_html( get_the_title() ); ?></h2>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> <?php echo esc_html( get_the_date( 'j F Y' ) )?></li>
                                <li><a href="#"><i class="icon-user"></i> <?php echo esc_html( get_the_author() );?></a></li>
                                <li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>
                                <li><a href="#"><i class="icon-comments"></i> 43 Comments</a></li>
                                <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                            </ul>

							<div class="entry-image">
								<a href="#">
                                    <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
                                </a>
							</div>

							<div class="entry-content notopmargin">
								<?php the_content(); ?>
							</div>

                            <?php wp_learn_sharepost();?>
						<?php endwhile; ?>
					</div>

                    <div class="post-navigation clearfix">

                        <div class="col_half nobottommargin">
                            <?php previous_post_link("%link", "&lArr; %title"); ?>
                        </div>

                        <div class="col_half col_last tright nobottommargin">
                            <?php next_post_link("%link", "%title &rArr;"); ?>
                        </div>

                    </div>

                    <div class="line"></div>

				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
