<?php
namespace site;

//Post types
function register_custom_post_types() {
	$labels1 = array(
		"name" => __( 'Возможности', 'learn' ),
		"singular_name" => __( 'Возможности', 'learn' ),
		"all_items" => __( 'Все', 'learn' ),
		"add_new" => __( 'Добавить', 'learn' ),
		"add_new_item" => __( 'Добавить', 'learn' ),
		"edit_item" => __( 'Редактировать', 'learn' ),
		"new_item" => __( 'Новый', 'learn' ),
		"view_item" => __( 'Смотреть', 'learn' ),
		"view_items" => __( 'Смотреть', 'learn' ),
		"search_items" => __( 'Найти', 'learn' ),
		"not_found" => __( 'Не найдено', 'learn' ),
		"not_found_in_trash" => __( 'Не найдено', 'learn' ),
	);
	$args1 = array(
		"label" => __( 'Возможности', 'learn' ),
		"labels" => $labels1,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array(),
		"query_var" => true,
		"supports" => array("title"),
		"menu_icon"  => 'dashicons-format-image'
	);

	register_post_type("possibilities", $args1);
}

add_action( 'init', 'site\register_custom_post_types' );

//Post types
function register_ourworks_post_types() {
	$labels1 = array(
		"name" => __( 'Наши работы', 'learn' ),
		"singular_name" => __( 'Наши работы', 'learn' ),
		"all_items" => __( 'Все', 'learn' ),
		"add_new" => __( 'Добавить', 'learn' ),
		"add_new_item" => __( 'Добавить', 'learn' ),
		"edit_item" => __( 'Редактировать', 'learn' ),
		"new_item" => __( 'Новый', 'learn' ),
		"view_item" => __( 'Смотреть', 'learn' ),
		"view_items" => __( 'Смотреть', 'learn' ),
		"search_items" => __( 'Найти', 'learn' ),
		"not_found" => __( 'Не найдено', 'learn' ),
		"not_found_in_trash" => __( 'Не найдено', 'learn' ),
	);
	$args1 = array(
		"label" => __( 'Наши работы', 'learn' ),
		"labels" => $labels1,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array(),
		"query_var" => true,
		"supports" => array("title"),
		"menu_icon"  => 'dashicons-images-alt2'
	);
	
	register_post_type("ourworks", $args1);
}

add_action( 'init', 'site\register_ourworks_post_types' );