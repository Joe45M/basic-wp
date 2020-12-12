<?php

/**
 * All important logic is generally handled min the functions.php file. The file contains set up, and commonly used
 * functions.
 */


/**
 * Let's enqueue bootstrap.
 *
 * WordPress uses the below methods to properly add assets the header (or footer).
 *
 * @see https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 */

wp_enqueue_style('theme/css', get_stylesheet_uri(), false, '1', 'all');
wp_enqueue_style('bs/css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css', false, '5.0.0', 'all');


/**
 * Now we need to add the JS for bootstrap.
 */

wp_enqueue_script('bs/js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js', false, '5.0.0', true);