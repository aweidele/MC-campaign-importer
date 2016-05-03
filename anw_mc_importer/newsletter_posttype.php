<?php
add_action('init', 'register_post_types');
function register_post_types() {
/**** NEWSLETTER POST TYPE ****/
	$labels = array(
		'name' => _x('Newsletters', 'post type general name'),
		'singular_name' => _x('Newsletter', 'post type singular name'),
		'add_new' => _x('Add New Newsletter', 'portfolio item'),
		'add_new_item' => __('Add New Newsletter'),
		'edit_item' => __('Edit Newsletter'),
		'new_item' => __('New Newsletter'),
		'view_item' => __('View Newsletter'),
		'search_items' => __('Search Newsletters'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor'),
		//"menu_position" => 21
	  ); 
 
	register_post_type( 'newsletter' , $args );
	flush_rewrite_rules();
}
?>