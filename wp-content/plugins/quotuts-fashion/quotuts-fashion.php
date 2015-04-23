<?php 

/**
 * Plugin Name: Quotu Plugin for Fashion website Custom Post Type CPT
 * Plugin URI: 
 * Description: Plugin that specify for Fashion website use to make custom post type in wordpress
 * Version: 1.0.0
 * Author: Quoc Tuan
 */

/*add_action ('init', 'create_post_type_fashion_taxonomies');
function create_post_type_fashion_taxonomies() {
	$labels = array(
		'name'              => _x( 'Product Categories', 'taxonomy for male fashion' ),
		'singular_name'     => _x( 'Product Category', 'taxonomy singular name' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'has_archive'       => true,
		'rewrite'           => array( 'slug' => 'loai-san-pham' ),
	);

	register_taxonomy( 'loai-san-pham', array( 'products' ), $args );

	$labels = array(
		'name'              => _x( 'Thời trang Nữ', 'taxonomy for male fashion' ),
		'singular_name'     => _x( 'Thời trang Nữ', 'taxonomy singular name' ),
		'search_items'      => __( 'Tìm kiếm loại thời trang Nữ' ),
		'all_items'         => __( 'Tất cả loại thời trang Nữ' ),
		'parent_item'       => __( 'Thư mục cha' ),
		'parent_item_colon' => __( 'Thư mục cha:' ),
		'edit_item'         => __( 'Chỉnh sửa loại thời trang Nữ' ),
		'update_item'       => __( 'Cập nhật loại thời trang Nữ' ),
		'add_new_item'      => __( 'Thêm loại thời trang Nữ' ),
		'new_item_name'     => __( 'Loại thời trang Nữ mới' ),
		'menu_name'         => __( 'Loại thời trang Nữ' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'public'            => true,
		'publicly_queryable' => true,
		'exclude_from_search' => true,
		'query_var'         => true,
		'has_archive'       => true,
		'rewrite'           => array( 'slug' => 'thoi-trang-nu' ),
	);

	register_taxonomy( 'thoi-trang-nu', array( 'product' ), $args );
}*/

add_action( 'init', 'create_post_type_fashion' );
function create_post_type_fashion() {
	register_post_type( 'products',
		array(
			'labels' => array(
				'name' => __( 'Products' ),
				'singular_name' => __( 'Products' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'products', 'with_front' => false ),
			'supports' => array('title', 'editor', 'thumbnail'),
            'taxonomies' => array('category')  
		)
	);
}

// add_action('init', 'custom_taxonomy_flush_rewrite');
// function custom_taxonomy_flush_rewrite() {
//     global $wp_rewrite;
//     $wp_rewrite->flush_rules();
// }

// add_filter( 'taxonomy_archive', 'slug_tax_page_one' );
// function slug_tax_page_one( $template ) {
// 	echo 'love';
//     if ( is_tax( 'TAXONOMY_NAME' ) ) {
//         global $wp_query;
//         $page = $wp_query->query_vars['paged'];
//         if ( $page = 0 ) {
//             $template = get_stylesheet_directory(). '/taxonomy.php';
//         }
//     }

//     return $template;
// }