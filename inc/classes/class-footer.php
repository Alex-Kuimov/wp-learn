<?php

namespace site;

class Footer extends Template {
	
	public function get_menu() {
		$template = '/template-parts/footer/menu.php';
		
		$menu_name = 'menu-footer';
		
		$locations = get_nav_menu_locations();
		$menu_list = array();
		
		if ( $locations && isset( $locations[ $menu_name ] ) ) {
			$menu       = wp_get_nav_menu_object( $locations[ $menu_name ] );
			$menu_items = wp_get_nav_menu_items( $menu );
			
			foreach ( $menu_items as $menu_item->ID => $menu_item ) {
				$menu_list[ $menu_item->ID ]['id']         = $menu_item->ID;
				$menu_list[ $menu_item->ID ]['title']      = $menu_item->title;
				$menu_list[ $menu_item->ID ]['url']        = $menu_item->url;
				$menu_list[ $menu_item->ID ]['attr_title'] = $menu_item->attr_title;
				$menu_list[ $menu_item->ID ]['class']      = $menu_item->classes[0];
				$menu_list [ $menu_item->ID ]['parent']    = $menu_item->menu_item_parent;
			}
		}
		
		return $this->render( $template , $menu_list );
	}

	public function copyright(){
		$template  = '/template-parts/footer/copyright.php';
		
		$args = array(
			'copyright' => get_theme_mod( 'copyright' ) ?? false,
		);
		
		return $this->render( $template, $args );
	}
	
	public function social_links(){
		$template = '/template-parts/footer/social_links.php';
		
		$args = array(
			'facebook' => get_theme_mod( 'facebook' ) ?? false,
			'twitter' => get_theme_mod( 'twitter' ) ?? false,
			'google' => get_theme_mod( 'google' ) ?? false,
		);
		
		return $this->render( $template, $args );
	}
	
	public function footer_contacts(){
		$template = '/template-parts/footer/contacts.php';
		
		$args = array(
			'email' => get_theme_mod( 'footer_email' ) ?? false,
			'phone' => get_theme_mod( 'footer_phone' ) ?? false,
		);
		
		return $this->render( $template, $args );
	}
}