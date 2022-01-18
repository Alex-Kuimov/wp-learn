<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package learn
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function learn_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'learn_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function learn_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'learn_pingback_header' );

/**
 * breadcrumbs
 */
function wp_learn_breadcrumbs() {

       // получаем номер текущей страницы
        $page_num = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

        echo '<ol class="breadcrumb">';
        if( ! is_front_page() ){ // не главная

            echo '<li class="breadcrumb-item"><a href="' . site_url() . '">Главная</a></li>';


            if( is_category() ) {
//                $post_page_title = get_the_title( get_option('page_for_posts', true) );
//                single_cat_title();
//                the_category();
                echo '<li class="breadcrumb-item active" aria-current="page">'.esc_html( get_the_archive_title() ).'</li>';
            }
            if ( is_single() ){
//                echo '<li class="breadcrumb-item">'.esc_html( single_term_title() ).'</li>';
//                echo '<li class="breadcrumb-item active" aria-current="page">'.esc_html( get_the_title() ).'</li>';
            }

            /*if( is_single() ){ // записи

                the_category( ', ' ); echo $separator."cat"; the_title();
                echo "1";

            } elseif ( is_page() ){ // страницы WordPress

                the_title();
                echo "2";

            } elseif ( is_category() ) {

                echo "3";
                single_cat_title();

            } elseif( is_tag() ) {
                echo "4";

                single_tag_title();

            } elseif ( is_day() ) { // архивы (по дням)
                echo "5";

                echo '<a href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . get_the_time( 'Y' ) . '</a>' . $separator;
                echo '<a href="' . get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) . '">' . get_the_time( 'F' ) . '</a>' . $separator;
                echo get_the_time('d');

            } elseif ( is_month() ) { // архивы (по месяцам)

                echo '<a href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . get_the_time( 'Y' ) . '</a>' . $separator;
                echo get_the_time('F');

            } elseif ( is_year() ) { // архивы (по годам)

                echo get_the_time( 'Y' );

            } elseif ( is_author() ) { // архивы по авторам

                global $author;
                $userdata = get_userdata( $author );
                echo 'Опубликовал(а) ' . $userdata->display_name;

            } elseif ( is_404() ) { // если страницы не существует

                echo 'Ошибка 404';

            }

            if ( $page_num > 1 ) { // номер текущей страницы
                echo ' (' . $page_num . '-я страница)';
            }*/

        }

        echo '</ol>';
    }

/**
 * shared post
 */
function wp_learn_sharepost(){
    ?>
        <div class="si-share noborder clearfix">
			<span>Share this Post:</span>
			<div>
                <a href="#" class="social-icon si-borderless si-facebook">
                    <i class="icon-facebook"></i>
                    <i class="icon-facebook"></i>
                </a>
                <a href="#" class="social-icon si-borderless si-twitter">
                    <i class="icon-twitter"></i>
                    <i class="icon-twitter"></i>
                </a>
                <a href="#" class="social-icon si-borderless si-pinterest">
                    <i class="icon-pinterest"></i>
                    <i class="icon-pinterest"></i>
                </a>
                <a href="#" class="social-icon si-borderless si-gplus">
                    <i class="icon-gplus"></i>
                    <i class="icon-gplus"></i>
                </a>
                <a href="#" class="social-icon si-borderless si-rss">
                    <i class="icon-rss"></i>
                    <i class="icon-rss"></i>
                </a>
                <a href="#" class="social-icon si-borderless si-email3">
                    <i class="icon-email3"></i>
                    <i class="icon-email3"></i>
                </a>
			</div>
		</div>
    <?php
}

add_filter( 'get_the_archive_title', function( $title ){
	return strip_tags(preg_replace('~^[^:]+: ~', '', $title ));
});
