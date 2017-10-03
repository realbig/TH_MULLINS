<?php

die(); // RIP

/*----------------------------------
Adding categories to the features post type
------------------------------------*/
add_action('init', 'features_cat',11);
function features_cat() {
	register_taxonomy_for_object_type( 'category', 'features' );
}
/*----------------------------------
Custom excerpt length
------------------------------------*/
function mullins_excerpt_length( $length ) {
	return 100;
}
add_filter( 'excerpt_length', 'mullins_excerpt_length', 999 );
/*----------------------------------
Change viewport meta
------------------------------------*/

function mullins_viewport() { ?>
<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<!-- Kyle changing the responsive zoom ability -->
<meta content="initial-scale=1.0" name="viewport"/>
<?php
}
add_action( 'wp_head', 'mullins_viewport' );
function woo_load_responsive_meta_tags() { }
?>