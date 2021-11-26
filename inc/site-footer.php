<?php
	namespace site\footer;

function get_menu() {
	$template = '/template-parts/footer/menu.php';

	$menu_name = 'menu-footer';

	$locations = get_nav_menu_locations();
	$menu_list = array();

	if ( $locations && isset( $locations[ $menu_name ] ) ) {
		$menu       = wp_get_nav_menu_object( $locations[ $menu_name ] );
		$menu_items = wp_get_nav_menu_items( $menu );

		foreach ( $menu_items as $key => $menu_item ) {
			$menu_list[ $key ]['id']         = $menu_item->ID;
			$menu_list[ $key ]['title']      = $menu_item->title;
			$menu_list[ $key ]['url']        = $menu_item->url;
			$menu_list[ $key ]['attr_title'] = $menu_item->attr_title;
			$menu_list[ $key ]['class']      = $menu_item->classes[0];
			$menu_list [ $key ]['parent']    = $menu_item->menu_item_parent;
		}
	}

	ob_start();
	include get_template_directory() . $template;
	return ob_get_clean();
}

function copyright() {
	$template  = '/template-parts/footer/copyright.php';
	$copyright = get_theme_mod( 'copyright' );


	if ( ! $copyright ) {
		return false;
	}

	ob_start();
	include get_template_directory() . $template;
	return ob_get_clean();
}

function social_links() {
	$template = '/template-parts/footer/social_links.php';
	$fb       = get_theme_mod( 'facebook' );
	$tw       = get_theme_mod( 'twitter' );
	$gp       = get_theme_mod( 'google' );

	if ( ! $fb && ! $tw && ! $gp ) {
		return false;
	}

	ob_start();
	include get_template_directory() . $template;
	return ob_get_clean();
}

function footer_contacts() {
	$template = '/template-parts/footer/contacts.php';
	$email    = get_theme_mod( 'footer_email' );
	$phone    = get_theme_mod( 'footer_phone' );

	if ( ! $email && ! $phone ) {
		return false;
	}

	ob_start();
	include get_template_directory() . $template;
	return ob_get_clean();

}
