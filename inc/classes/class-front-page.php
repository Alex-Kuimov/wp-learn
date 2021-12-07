<?php

namespace site;

class Front_Page extends Template {

	public function get_section_about() {
		$template = '/template-parts/front-page/about.php';

		$args = array(
			'title' => get_field( 'about_title' ) ?? false,
			'text'  => get_field( 'about_text' ) ?? false,
			'image' => get_field( 'about_image' ) ?? false,
		);

		return $this->render( $template, $args );
	}
	
	public function get_section_2() {
		$template = '/template-parts/front-page/section2.php';
		
		$args = array(
			"tab1" => array(
				'icon' => get_field( 'icon_1' ) ?? false,
				'subicon'  => get_field( 'sub_icon1' ) ?? false,
				'title' => get_field( 'title1' ) ?? false,
				'text' => get_field( 'text1' ) ?? false,
			),
			"tab2" => array(
				'icon' => get_field( 'icon_2' ) ?? false,
				'subicon'  => get_field( 'sub_icon2' ) ?? false,
				'title' => get_field( 'title2' ) ?? false,
				'text' => get_field( 'text2' ) ?? false,
			),
			"tab3" => array(
				'icon' => get_field( 'icon_3' ) ?? false,
				'subicon'  => get_field( 'sub_icon3' ) ?? false,
				'title' => get_field( 'title3' ) ?? false,
				'text' => get_field( 'text3' ) ?? false,
			),
		);
		
		return $this->render( $template, $args );
	}
	
	

}
