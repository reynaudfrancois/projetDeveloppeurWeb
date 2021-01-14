<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 99 );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

if ( ! function_exists( 'sparkling_call_for_action' ) ) {
/**
 * Call for action text and button displayed above content
 */
	function sparkling_call_for_action() {
	  if ( of_get_option( 'w2f_cfa_text' )!=''){
	    echo '<div class="cfa">';
	      echo '<div class="container">';
	        echo '<div class="col-sm-8">';
	          echo '<span class="cfa-text">'. of_get_option( 'w2f_cfa_text' ).'</span>';
	          echo '</div>';
	          echo '<div class="col-sm-4">';
	          echo '<a class="btn btn-lg cfa-button" href="'. of_get_option( 'w2f_cfa_link' ). '">'. of_get_option( 'w2f_cfa_button' ). '</a>';
	          echo '</div>';
	      echo '</div>';
	    echo '</div>';
	  }
	}
}

?>