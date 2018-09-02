<?php

namespace WildPress;

class Shortcodes {

	public function __construct() {

		add_action( 'after_setup_theme', [ $this, 'after_setup_theme' ] );
	}

	public function after_setup_theme() {

		add_shortcode( 'wildpress_shortcode', [ $this, 'shortcode_wildpress_shortcode' ] );
	}

	public function shortcode_wildpress_shortcode( $attrs ) {
		return 'WildPress';
	}
}

new Shortcodes();
