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

}
