<?php

namespace WildPress;

class Utilities {

	public function __construct() {

		add_action( 'after_setup_theme', [ $this, 'after_setup_theme' ] );
	}

	public function after_setup_theme() {

		add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_scripts' ] );
	}

	public function enqueue_scripts() {

		// Enqueue custom styles
		$manifest = json_decode( file_get_contents( get_stylesheet_directory() . '/dist/mix-manifest.json' ) );
		wp_enqueue_script( 'wildpress-js', get_stylesheet_directory_uri() . '/dist' . $manifest->{'/main.js'}, [
			'jquery',
			'parent_theme'
		], false, true );
		wp_enqueue_style( 'wildpress-css', get_stylesheet_directory_uri() . '/dist' . $manifest->{'/main.css'}, [ 'parent_theme' ] );
	}
}

new Utilities();