<?php
/** 
 * Function to add extra contact methods to user profiles
 * require_once('includes/functions/user-profile-contact.php');
*/


add_filter('user_contactmethods', 'my_user_contactmethods');
 
function my_user_contactmethods($user_contactmethods){
 
  $user_contactmethods['job'] = 'Job title';
 
  return $user_contactmethods;
}
?>