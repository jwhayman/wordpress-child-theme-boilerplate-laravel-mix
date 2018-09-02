<?php

namespace WildPress;

$libraries = [
	'shortcodes', // Shortcodes
	'utilities', // General WordPress utilities,
];

foreach ( $libraries as $library ) {
	require_once "lib/${library}.php";
}