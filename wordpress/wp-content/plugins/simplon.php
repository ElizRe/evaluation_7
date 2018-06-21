<?php
/*
Plugin Name: Add Text To Header
Version: 0.1
Description: Add Text To Header
Author: ElizabethR
Author URI: 
Plugin URI: 

*/

// Hook the 'wp_head' action hook, add the function named 'simplon_Add_Text' to it
add_action("wp_head", "simplon_Add_Text");
 
// Define 'simplon_Add_Text'


function simplon_Add_Text()
{
if ( is_page('simplon') ) 
  echo "<h1 style='color: white; font-size:900%;'>IT WORKS!</h1>";
}

