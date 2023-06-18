<?php

add_action("wp_enqueue_scripts", "css");

function css(){
wp_enqueue_style("css1", get_template_directory_uri() . "./style.css");
}
function themeslug_enqueue_script() {
  wp_enqueue_script( 'my-js', get_template_directory_uri() . './menu.js' );
}


function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => ( 'Header Menu' ),
        'extra-menu' => ( 'Extra Menu' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );
   add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );

?>