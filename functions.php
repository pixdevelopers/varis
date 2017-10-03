<?php
add_theme_support( 'post-thumbnails' ); 

if ( function_exists('register_sidebar') )  
    register_sidebar(array(  
    'name' => 'topcontactinfo',  
    'before_widget' => '',  
    'after_widget' => '',  
    'before_title' => '',  
    'after_title' => '',  
));

function custom_assets() {
wp_enqueue_style( 'main-css', get_template_directory_uri() . '/css/style.css');
wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/css/animate.css');
wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
wp_enqueue_style( 'fontawesome-css', get_template_directory_uri() . '/css/font-awesome.min.css');
wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/js/jquery-1.11.0.min.js');
wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
wp_enqueue_script( 'scripts-js', get_template_directory_uri() . '/js/script.js');


}
add_action( 'wp_enqueue_scripts', 'custom_assets' );


function load_custom_wp_admin_style() {
        wp_enqueue_style('admin-css', get_template_directory_uri() . '/css/admin.css');
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );


// Register Custom Post Type
function services() {

	$labels = array(
		'name'                  => 'خدمات',
		'singular_name'         => 'خدمات',
		'menu_name'             => 'خدمات',
		'name_admin_bar'        => 'خدمات',
		'archives'              => 'Item Archives',
		'attributes'            => 'Item Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'همه',
		'add_new_item'          => 'جدید',
		'add_new'               => 'افزودن خدمات جدید',
		'new_item'              => 'جدید',
		'edit_item'             => 'ویرایش',
		'update_item'           => 'آپدیت',
		'view_item'             => 'مشاهده',
		'view_items'            => 'مشاهده',
		'search_items'          => 'جستجو',
		'not_found'             => 'خدماتی یافت نشد',
		'not_found_in_trash'    => 'خدماتی یافت نشد',
		'featured_image'        => 'عکس',
		'set_featured_image'    => 'آپلود عکس',
		'remove_featured_image' => 'حذف عکس',
		'use_featured_image'    => 'انتخاب به عنوان عکس',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$args = array(
		'label'                 => 'خدمات',
		'description'           => 'خدمات',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'services_post_type', $args );

}
add_action( 'init', 'services', 0 );

// Register Custom Post Type
function articles() {

	$labels = array(
		'name'                  => 'مقالات',
		'singular_name'         => 'مقالات',
		'menu_name'             => 'مقالات',
		'name_admin_bar'        => 'مقالات',
		'archives'              => 'Item Archives',
		'attributes'            => 'Item Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'همه',
		'add_new_item'          => 'جدید',
		'add_new'               => 'افزودن مقاله جدید',
		'new_item'              => 'جدید',
		'edit_item'             => 'ویرایش',
		'update_item'           => 'آپدیت',
		'view_item'             => 'مشاهده',
		'view_items'            => 'مشاهده',
		'search_items'          => 'جستجو',
		'not_found'             => 'مقاله ای یافت نشد',
		'not_found_in_trash'    => 'مقاله ای یافت نشد',
		'featured_image'        => 'عکس',
		'set_featured_image'    => 'آپلود عکس',
		'remove_featured_image' => 'حذف عکس',
		'use_featured_image'    => 'انتخاب به عنوان عکس',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$args = array(
		'label'                 => 'مقالات',
		'description'           => 'مقالات',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'articles_post_type', $args );

}
add_action( 'init', 'articles', 0 );


// Register Custom Post Type
function team() {

	$labels = array(
		'name'                  => 'اعضا',
		'singular_name'         => 'اعضا',
		'menu_name'             => 'اعضا',
		'name_admin_bar'        => 'مقالات',
		'archives'              => 'Item Archives',
		'attributes'            => 'Item Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'همه',
		'add_new_item'          => 'جدید',
		'add_new'               => 'افزودن عضو جدید',
		'new_item'              => 'جدید',
		'edit_item'             => 'ویرایش',
		'update_item'           => 'آپدیت',
		'view_item'             => 'مشاهده',
		'view_items'            => 'مشاهده',
		'search_items'          => 'جستجو',
		'not_found'             => 'عضوی یافت نشد',
		'not_found_in_trash'    => 'عضوی ای یافت نشد',
		'featured_image'        => 'عکس',
		'set_featured_image'    => 'آپلود عکس',
		'remove_featured_image' => 'حذف عکس',
		'use_featured_image'    => 'انتخاب به عنوان عکس',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$args = array(
		'label'                 => 'مقالات',
		'description'           => 'مقالات',
		'labels'                => $labels,
		'supports'              => array( '' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'team_post_type', $args );

}
add_action( 'init', 'team', 0 );


function getExcerpt($string, $word_limit)
{
  $words = explode(' ', strip_tags($string), ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
} 
