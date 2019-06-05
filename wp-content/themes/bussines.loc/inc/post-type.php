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

	register_post_type('auto', array(
		'labels'             => array(
			'name'               => 'Автомобили', // Основное название типа записи
			'singular_name'      => 'Автомобилей', // отдельное название записи типа Book
			'add_new'            => 'Добавить новый автомобиль',
			'add_new_item'       => 'Добавить новый автомобиль',
			'edit_item'          => 'Редактировать автомобиль',
			'new_item'           => 'Новый автомобиль',
			'view_item'          => 'Посмотреть автомобиль',
			'search_items'       => 'Найти автомобиль',
			'not_found'          => 'Автомобилей не найдено',
			'not_found_in_trash' => 'В корзине автомобилей не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Автомобили'

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
		'supports'           => array('title', 'editor', 'thumbnail')
	) );
}

// хук для регистрации
add_action( 'init', 'create_taxonomy' );
function create_taxonomy(){
	register_taxonomy('auto_cat', array('auto'), array(
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Категории автомобилей',
			'singular_name'     => 'Категория автомобилей',
			'search_items'      => 'Search Категории автомобилей',
			'all_items'         => 'All Категории автомобилей',
			'view_item '        => 'View Категория автомобилей',
			'parent_item'       => 'Parent Категория автомобилей',
			'parent_item_colon' => 'Parent Категория автомобилей:',
			'edit_item'         => 'Edit Категория автомобилей',
			'update_item'       => 'Update Категория автомобилей',
			'add_new_item'      => 'Add New Категория автомобилей',
			'new_item_name'     => 'New Категория автомобилей Name',
			'menu_name'         => 'Категория автомобилей',
		),
		'description'           => '', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_in_menu'          => true, // равен аргументу show_ui
		'show_tagcloud'         => true, // равен аргументу show_ui
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		'hierarchical'          => false,
		//'update_count_callback' => '_update_post_term_count',
		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
		'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
		'_builtin'              => false,
		'show_in_quick_edit'    => null, // по умолчанию значение show_ui
	) );

	register_taxonomy('auto_color', array('auto'), array(
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Цвет кузова',
			'singular_name'     => 'Цвет кузова',
			'search_items'      => 'Цвет кузова',
			'all_items'         => 'Цвет кузова',
			'view_item '        => 'Цвет кузова',
			'parent_item'       => 'Цвет кузова',
			'parent_item_colon' => 'Цвет кузова:',
			'edit_item'         => 'Цвет кузова',
			'update_item'       => 'Цвет кузова',
			'add_new_item'      => 'Цвет кузова',
			'new_item_name'     => 'Цвет кузова Name',
			'menu_name'         => 'Цвет кузова',
		),
		'description'           => '', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_in_menu'          => true, // равен аргументу show_ui
		'show_tagcloud'         => true, // равен аргументу show_ui
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		'hierarchical'          => false,
		//'update_count_callback' => '_update_post_term_count',
		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
		'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
		'_builtin'              => false,
		'show_in_quick_edit'    => null, // по умолчанию значение show_ui
	) );

	register_taxonomy('auto_body', array('auto'), array(
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Тип кузова',
			'singular_name'     => 'Тип кузова',
			'search_items'      => 'Тип кузова',
			'all_items'         => 'Тип кузова',
			'view_item '        => 'Тип кузова',
			'parent_item'       => 'Тип кузова',
			'parent_item_colon' => 'Тип кузова:',
			'edit_item'         => 'Тип кузова',
			'update_item'       => 'Тип кузова',
			'add_new_item'      => 'Тип кузова',
			'new_item_name'     => 'Тип кузова Name',
			'menu_name'         => 'Тип кузова',
		),
		'description'           => '', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_in_menu'          => true, // равен аргументу show_ui
		'show_tagcloud'         => true, // равен аргументу show_ui
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		'hierarchical'          => false,
		//'update_count_callback' => '_update_post_term_count',
		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
		'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
		'_builtin'              => false,
		'show_in_quick_edit'    => null, // по умолчанию значение show_ui
	) );
}
