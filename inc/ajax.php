<?php

/* ==========================================================================
   AJAX FUNCTIONS
   ========================================================================== */

//ajax call with no privileges

add_action( 'wp_ajax_nopriv_load_more', 'load_more' );
add_action( 'wp_ajax_load_more', 'load_more' );

function load_more(){

	$paged = $_POST["page"]+1;
	$prev = $_POST["prev"];
	$url = site_url();
	$section = "news";

	if ( $prev == 1 && $_POST["page"] != 1 ){

		$paged = $_POST["page"]-1;

	}

	$query = new WP_Query ( array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'paged' => $paged
	) );

  	if ( $query->have_posts() ) :
	// $count = 1;

  		echo '<div class="page-limit" data-page="'. $url . '/' . $section .'/page/' . $paged . '">';

        while ( $query->have_posts() ) : $query->the_post(); 

        	get_template_part( 'template-parts/content', get_post_format() ); 
            

            // if ( ( $count + 1) % 2 ){
            //     echo "</div><div class='row rowflex'>";
            // }

	// $count++; 
	endwhile; 

	echo '</div>';

	else: 

		echo 0;

	endif;

	wp_reset_postdata(); 

	die();

}

// by default is null
function check_paged( $num = null ){

	$output = '';

	if( is_paged() ){ 

		$output = 'page/' . get_query_var( 'paged' );

	}

	if ( $num == 1 ){

	    $paged = ( get_query_var( 'paged' ) == 0 ? 1 : get_query_var( 'paged' ) );
	    return $paged;

	} else {

	    return $output;

	}

}
