<?php
add_action('init', 'bussines__post_types');
function bussines__post_types(){

	register_post_type('features', array(
		'labels'             => array(
			'name'               => 'Преимущества', // Основное название типа записи
			'singular_name'      => 'Преимущество', // отдельное название записи типа Book
			'add_new'            => 'Добавить новое преимущество',
			'add_new_item'       => 'Добавить новое преимущество',
			'edit_item'          => 'Редактировать преимущество',
			'new_item'           => 'Новая иконка',
			'view_item'          => 'Посмотреть преимущество',
			'search_items'       => 'Найти преимущество',
			'not_found'          =>  'Преимуществ не найдено',
			'not_found_in_trash' => 'В корзине преимущество не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Преимущества'

		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title', 'excerpt')
	) );

	register_post_type('reviews', array(
		'labels'             => array(
			'name'               => 'Отзывы', // Основное название типа записи
			'singular_name'      => 'Отзыв', // отдельное название записи типа Book
			'add_new'            => 'Добавить новый отзыв',
			'add_new_item'       => 'Добавить новый отзыв',
			'edit_item'          => 'Редактировать отзыв',
			'new_item'           => 'Новая иконка',
			'view_item'          => 'Посмотреть отзыв',
			'search_items'       => 'Найти отзыв',
			'not_found'          => 'Отзывов не найдено',
			'not_found_in_trash' => 'В корзине отзыв не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Отзывы'

		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title', 'excerpt', 'thumbnail')
	) );

	register_post_type('awards', array(
		'labels'             => array(
			'name'               => 'Награды', // Основное название типа записи
			'singular_name'      => 'Наград', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую награду',
			'add_new_item'       => 'Добавить новую награду',
			'edit_item'          => 'Редактировать награду',
			'new_item'           => 'Новая награда',
			'view_item'          => 'Посмотреть награду',
			'search_items'       => 'Найти награду',
			'not_found'          => 'Наград не найдено',
			'not_found_in_trash' => 'В корзине наград не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Награды'

		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title', 'excerpt')
	) );
}