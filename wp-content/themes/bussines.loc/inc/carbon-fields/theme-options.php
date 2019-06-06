<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

/**
 * Theme Options
 */
Container::make('theme_options', __('Theme Options'))
	->add_tab(__('Settings in header'), array(
		Field::make('text', 'crb_phone', 'Phone'),
		Field::make('text', 'crb_hours', 'Work hours'),
		Field::make('checkbox', 'crb_show_content', 'Show description'),
	))
	->add_tab(__('Feedback in header'), array(
		Field::make('text', 'crb_feedback_title', 'Feedback title'),
		Field::make('text', 'crb_feedback_form', 'Feedback shortcode from contact form 7'),
	))
	->add_tab(__('Settings in footer'), array(
		Field::make('radio', 'crb_subtitle_styling', __('Subtitle text style'))
			->add_options(array(
				'em' => __('Italic'),
				'strong' => __('Bold'),
				'del' => __('Strike'),
			))
	))
	/**
	 * How can you help
	 */
	->add_tab(__('How we can help'), array(
		Field::make('text', 'crb_help_title', 'Help title'),
		Field::make('rich_text', 'crb_help_text', 'Help text'),
		Field::make( 'complex', 'crb_help_list', 'Help List' )
			->set_layout( 'tabbed-horizontal' )
			->add_fields( array(
				Field::make( 'text', 'crb_help_list_text', 'Help list text' ),
			) ),
		Field::make( 'color', 'crb_help_bg_color', 'Help block background color' ),
		Field::make( 'image', 'crb_help_image', 'Help block image' )
	))
	/**
	 * Price list
	 */
	->add_tab(__('Price list'), array(
		Field::make('text', 'crb_price_list_title', 'Price list title'),
		Field::make( 'complex', 'crb_price_list_1', 'Price list 1' )
			->set_layout( 'tabbed-horizontal' )
			->add_fields( array(
				Field::make( 'text', 'crb_price_list_text', 'Price list text' ),
				Field::make( 'text', 'crb_price_list_money', 'Price list money' ),
			) ),
		Field::make( 'complex', 'crb_price_list_2', 'Price list 2' )
			->set_layout( 'tabbed-vertical' )
			->add_fields( array(
				Field::make( 'text', 'crb_price_list_text', 'Price list text' ),
				Field::make( 'text', 'crb_price_list_money', 'Price list money' ),
			) ),
		Field::make( 'complex', 'crb_price_list_3', 'Price list 3' )
			->set_layout( 'tabbed-vertical' )
			->add_fields( array(
				Field::make( 'text', 'crb_price_list_text', 'Price list text' ),
				Field::make( 'text', 'crb_price_list_money', 'Price list money' ),
			) ),
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
