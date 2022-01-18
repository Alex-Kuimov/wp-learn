<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package learn
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

            <section id="page-title">
                <div class="container clearfix">
                    <?php
                    echo "<h1>". get_the_archive_title() ."</h1>" ;
                    the_archive_description( '<span>', '</span>' );
                    wp_learn_breadcrumbs();
                    ?>
                </div>
            </section>

            <section id="content">
                <div class="content-wrap">
                    <div class="container clearfix">
                        <div id="posts" class="post-grid grid-container post-masonry grid-3 clearfix">
                            <?php
                            /* Start the Loop */
                            while ( have_posts() ) :
                                the_post();
                                get_template_part( 'template-parts/category', get_post_type() );
                            endwhile;

                            the_posts_navigation();
                            ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php
		else :

			get_template_part( 'template-parts/category' );

		endif;
		?>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();


