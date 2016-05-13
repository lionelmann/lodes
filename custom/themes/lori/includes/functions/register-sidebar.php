<?php

/**
* Register Wordpress sidebar widget
*/

register_sidebar(array(
 	'name' => __( 'Address' ),
 	'id' => 'address',
 	'description' => __( 'Address will appear in footer' ),
  	'before_widget' => '',
  	'after_widget' => '',
  	'before_title' => '<span class="hidden" style="display: none;">',
  	'after_title' => '</span>'
));

register_sidebar(array(
 	'name' => __( 'Contact' ),
 	'id' => 'contact',
 	'description' => __( 'Contact form will appear in footer' ),
  	'before_widget' => '',
  	'after_widget' => '',
  	'before_title' => '<span class="hidden" style="display: none;">',
  	'after_title' => '</span>'
));

?>