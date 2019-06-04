<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

/**
 * page home
 */
Container::make( 'post_meta', __( 'Page Options', 'crb' ) )
	->where( 'post_type', '=', 'page' ) // only show our new fields on pages
	->where( 'post_id', '=', '43' ) // only show our new fields on pages
	//slider
	->add_tab(__('Slider'), array(
		Field::make( 'complex', 'crb_slider', 'Slider options' )
			->set_layout( 'tabbed-horizontal' )
			->add_fields( array(
				Field::make( 'text', 'title', 'Title' ),
				Field::make( 'image', 'image', 'Image' ),
			) ),
	) )
	//advanced
	->add_tab(__('Advanced options'), array(
		Field::make( 'complex', 'crb_advanced', 'Advanced options' )
			->set_layout( 'tabbed-horizontal' )
			->add_fields( array(
				Field::make( 'text', 'icon', 'Icon' )
					->set_help_text('Поле только для иконок. Иконки можно найти на сайте <a target="_blank" href="http://fontawesome.io/icons/">здесь</a>. Кликайте на иконку и скопируйте название из атрибута class'),
				Field::make( 'text', 'title', 'Title' ),
				Field::make( 'textarea', 'text', 'Text' ),
			) ),
		Field::make( 'text', 'advanced_count', 'Advanced count items' )
			->set_help_text('Сколько элементов показать на странице?')
			->set_width(20)
	) )
	//Block About
	->add_tab(__('Block About'), array(
		Field::make('text', 'crb_block_about_title', 'Block About title'),
		Field::make('image', 'crb_block_about_image', 'Block About image'),
		Field::make('textarea', 'crb_block_about_text', 'Block About text'),
	))
	//Block Services
	->add_tab(__('Block Services'), array(
		Field::make('textarea', 'crb_block_services_text', 'Block Services text'),
		Field::make('text', 'crb_block_services_count', 'Block Services count')
		->set_width(20),
	))
	//Block Help Center
	->add_tab(__('Block Help Center'), array(
		Field::make('text', 'crb_block_help_center_title', 'Block Help Center title'),
		Field::make('text', 'crb_block_help_center_work_days', 'Block Help Center Work days'),
		Field::make('text', 'crb_block_help_center_saturday', 'Block Help Center saturday'),
		Field::make('text', 'crb_block_help_center_sunday', 'Block Help Center sunday'),
		Field::make('text', 'crb_block_help_center_phone', 'Block Help Center phone'),
	))
	//social icons in footer
	->add_tab(__('Social icons in footer'), array(
		Field::make( 'complex', 'crb_social_icons', 'Advanced options' )
			->set_layout( 'tabbed-horizontal' )
			->add_fields( array(
				Field::make( 'text', 'icon', 'Icon' ),
				Field::make( 'text', 'link', 'Text' ),
				Field::make( 'select', 'crb_social_icons_select', __( 'Choose type of text' ) )
					->set_help_text('Выеберите тип текста')
					->set_options( array(
						'address' => 'address',
						'email' => 'email',
						'phone' => 'phone',
						'link' => 'link'
					) )
			) ),
	) );
