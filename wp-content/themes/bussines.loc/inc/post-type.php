<?php
add_action('init', 'bussines__post_types');
function bussines__post_types(){
	register_post_type('socials', array(
		'labels'             => array(
			'name'               => 'Социальные иконки', // Основное название типа записи
			'singular_name'      => 'Социальная иконка', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую',
			'add_new_item'       => 'Добавить новую иконку',
			'edit_item'          => 'Редактировать иконку',
			'new_item'           => 'Новая иконка',
			'view_item'          => 'Посмотреть иконку',
			'search_items'       => 'Найти иконку',
			'not_found'          =>  'Иконок не найдено',
			'not_found_in_trash' => 'В корзине иконок не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Социальные иконки'

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
		'supports'           => array('title')
	) );

	register_post_type('main-slider', array(
		'labels'             => array(
			'name'               => 'Слайдер', // Основное название типа записи
			'singular_name'      => 'Слайд', // отдельное название записи типа Book
			'add_new'            => 'Добавить новый слайд',
			'add_new_item'       => 'Добавить новый слайд',
			'edit_item'          => 'Редактировать слайд',
			'new_item'           => 'Новая иконка',
			'view_item'          => 'Посмотреть слайд',
			'search_items'       => 'Найти слайд',
			'not_found'          =>  'Слайдов не найдено',
			'not_found_in_trash' => 'В корзине слайдов не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Слайдер'

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
		'supports'           => array('title', 'thumbnail')
	) );
}