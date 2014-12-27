<?php
/**
 * Titlebar hack.
 */
add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
function baw_hack_wp_title_for_home( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( 'Home', 'theme_domain' ) . ' | ' . get_bloginfo( 'description' );
  }
  return $title;
}

/**
 * Headerimg.
 */


function magneet_show_header($id){
	if(has_post_thumbnail($id)){
		$image = wp_get_attachment_url( get_post_thumbnail_id($id) );
	}else{
		$image = 'http://mouldy-t.sem/wp-content/uploads/2014/12/unnamed.jpg';
	}
	
	if(!empty($image)){
		echo $image;
			  
	}
}



/**
 * Top menu.
 */

function register_top_menu() {
  register_nav_menu('top-menu',__( 'Top Menu' ));
}
add_action( 'init', 'register_top_menu' );
?>