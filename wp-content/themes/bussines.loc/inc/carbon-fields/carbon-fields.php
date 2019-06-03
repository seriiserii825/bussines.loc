<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options()
{
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
		));

	Container::make('post_meta', __('Post meta'))
		->where('post_type', '=', 'features')
		->add_fields(array(
			Field::make('text', 'crb_features_icon', 'Название иконки')
				->set_help_text('Название иконки нужно взять с сайта https://fontawesome.com/icons?from=io'),
		));

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

}
