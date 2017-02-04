<?php

/* 
 * Code Snippet to make Revolution Slider enable WPML support when Polylang
 * is enabled. Polylang has the required WPML compatibility functions to
 * make Revslider work.
 *
 * Add this to your functions.php or using the Code Snippets Plugin
 *
 * Author: https://github.com/stuffo/polylang-revslider
 */

// only run if Polylang is loaded
if ( function_exists('pll_languages_list') ) { 
	add_action('wpml_loaded', '__return_true', 10, 0);
	do_action('wpml_loaded');
}
