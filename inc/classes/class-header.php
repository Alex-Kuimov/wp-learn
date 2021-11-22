<?php

namespace site;

class Header extends Template {

	public function get_logo() {
		$template = '/template-parts/header/logo.php';

		$args = array(
			'logo01' => get_theme_mod( 'logo01' ) ?? false,
			'logo02' => get_theme_mod( 'logo02' ) ?? false,
		);

		return $this->render( $template, $args );
	}

	public function get_menu() {
		$template = '/template-parts/header/menu.php';

		$menu_name = 'menu-header';

		$locations = get_nav_menu_locations();
		$menu_list = array();

		if ( $locations && isset( $locations[ $menu_name ] ) ) {
			$menu       = wp_get_nav_menu_object( $locations[ $menu_name ] );
			$menu_items = wp_get_nav_menu_items( $menu );

			foreach ( $menu_items as $key => $menu_item ) {
				$menu_list[ $menu_item->ID ]['id']         = $menu_item->ID;
				$menu_list[ $menu_item->ID ]['title']      = $menu_item->title;
				$menu_list[ $menu_item->ID ]['url']        = $menu_item->url;
				$menu_list[ $menu_item->ID ]['attr_title'] = $menu_item->attr_title;
				$menu_list[ $menu_item->ID ]['class']      = $menu_item->classes[0];
				$menu_list[ $menu_item->ID ]['parent']     = $menu_item->menu_item_parent;
			}
		}

		return $this->render( $template , $menu_list );
	}

}