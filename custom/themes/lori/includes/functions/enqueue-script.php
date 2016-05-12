<?php

/**
* Enqueue scripts
*/

function my_scripts() {
	wp_deregister_script('jquery');
	wp_enqueue_script('google-map', 'https://maps.googleapis.com/maps/api/js?v=3.14&#038;(key=AIzaSyBIiiFbPAKfTIqOC8K4sKqf1DB39Uh1hZc%29&#038;sensor=false&#038;ver=1.0', array(), '', true);
  	wp_enqueue_script('app', get_template_directory_uri() . '/dist/js/app.min.js', array(), '', true);
}

add_action( 'wp_enqueue_scripts', 'my_scripts' );

?>