<?php
    
   function navcustomstyle() {
		wp_register_style( 'navcustomstyle', get_template_directory_uri( '/css/navcustomstyle.css' ) );
		wp_enqueue_style( 'navcustomstyle' );
	}
    
	do_action("navcustomstyle");

//Navigation menus
	register_nav_menus(array(
		"primary" => __("Primary Menu"),
	));