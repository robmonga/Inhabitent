<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

 // Register Custom Post Type
function inhabitent_product() {
	$labels = array(
		'name'                  => 'Products',
		'singular_name'         => 'Product',
		'menu_name'             => 'Products',
		'name_admin_bar'        => 'Product',
		'archives'              => 'Product Archives',
		'attributes'            => 'Product Attributes',
		'parent_item_colon'     => 'Parent Product:',
		'all_items'             => 'All Products',
		'add_new_item'          => 'Add New Product',
		'add_new'               => 'Add New',
		'new_item'              => 'New Product',
		'edit_item'             => 'Edit Product',
		'update_item'           => 'Update Product',
		'view_item'             => 'View Product',
		'view_items'            => 'View Products',
		'search_items'          => 'Search Product',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Product',
		'uploaded_to_this_item' => 'Uploaded to this product',
		'items_list'            => 'Products list',
		'items_list_navigation' => 'Products list navigation',
		'filter_items_list'     => 'Filter products list',
	);
	$args = array(
		'label'                 => 'Product',
		'description'           => 'Inhabitent Products',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-cart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
		'template_lock'         => 'all',
		'template' => array(
			array( 'core/paragraph', array(
				'placeholder' => 'Description for the product',
			)),
		),
	);
	// how WP knows what $posttype to use after archive as a php file. 
	register_post_type( 'product', $args );
}
add_action( 'init', 'inhabitent_product', 0 );

// Register Custom Post Type
function adventure() {

	$labels = array(
		'name'                  => 'Adventures',
		'singular_name'         => 'Adventure',
		'menu_name'             => 'Adventures',
		'name_admin_bar'        => 'Adventure',
		'archives'              => 'Adventure Archives',
		'attributes'            => 'Adventure Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All adventures',
		'add_new_item'          => 'Add New Adventure',
		'add_new'               => 'Add Adventure',
		'new_item'              => 'New Adventure',
		'edit_item'             => 'Edit Adventure',
		'update_item'           => 'Update Adventure',
		'view_item'             => 'View Adventure',
		'view_items'            => 'View Adventures',
		'search_items'          => 'Search Adventure',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into adventure',
		'uploaded_to_this_item' => 'Uploaded to this adventure',
		'items_list'            => 'Adventures list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter adventures list',
	);
	$args = array(
		'label'                 => 'Adventure',
		'description'           => 'Adventure',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_icon'             => 'dashicons-thumbs-down',
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'adventure', $args );
	
}
add_action( 'init', 'adventure', 0 );