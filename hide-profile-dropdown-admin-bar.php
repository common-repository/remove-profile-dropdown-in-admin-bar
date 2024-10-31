<?php
/*
  Plugin Name: Remove Profile Dropdown in Admin Bar
  Plugin URI: https://www.wpzoom.com
  Description: Simple plugin to hide annoying dropdown with profile when accidentally hovering on the admin bar.
  Version: 1.0.0
  Author: WPZOOM
  Author URI: https://www.wpzoom.com
  License: GPL2+
  License URI: http://www.gnu.org/licenses/gpl-2.0.html

  Credit: Atlas_Gondal @ https://wordpress.stackexchange.com/questions/308590/how-to-remove-howdy-dropdown-menu-content
*/

add_action( 'admin_bar_menu', 'rpdab_remove_my_account', 999 );
function rpdab_remove_my_account( $wp_admin_bar ) {
   $wp_admin_bar->remove_node( 'user-actions' );
}

add_action( 'admin_bar_menu', 'rpdab_add_logout', 999 );
function rpdab_add_logout( $wp_admin_bar ) {
   $args = array(
      'id'     => 'logout',           // id of the existing child node (New > Post)
      'title'  => 'Logout',           // alter the title of existing node
      'parent' => 'top-secondary',    // set parent
  );
  $wp_admin_bar->add_node( $args );
}