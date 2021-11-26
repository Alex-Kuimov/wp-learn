<?php

namespace site;

class Template extends Singleton {

	public function render( $template, $args ) {
		ob_start();
		include get_template_directory() . $template;
		return ob_get_clean();
	}
}