<?php
include('includes/wp-cuztom-helper/cuztom.php');

//Include post custom posts type. Dependent on /wp-cuztom-helper classes.
include('includes/wp-cuztom-posts/custom-post-home.php');
//include('includes/wp-cuztom-posts/custom-page.php');
include('includes/wp-cuztom-posts/custom-post-staff.php');

//Load custom functions
require_once('includes/functions/enqueue-style.php');
require_once('includes/functions/enqueue-script.php');
require_once('includes/functions/register-sidebar.php');
require_once('includes/functions/register-menu.php');
//require_once('includes/functions/extra-user-info.php');
require_once('includes/functions/page-excerpts.php');
require_once('includes/functions/pagination.php');
require_once('includes/functions/custom-login-logo.php');
require_once('includes/functions/remove-menu-id.php');
require_once('includes/functions/remove-wp-version.php');

add_theme_support( 'post-thumbnails' ); 

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
?>