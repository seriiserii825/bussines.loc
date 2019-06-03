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
		->where('post_type', '=', 'socials')
		->add_fields(array(
			Field::make('text', 'crb_social_icon', 'Название иконки')
				->set_help_text('Название иконки нужно взять с сайта https://fontawesome.com/icons?from=io'),
			Field::make('radio', 'crb_social_type_icon', __('Тип иконки'))
				->add_options(array(
					'address' => __('Address'),
					'phone' => __('Phone'),
					'email' => __('Email'),
					'link' => __('Link'),
				)),
			Field::make('text', 'crb_social_link', 'Ссылка на соц сети')
				->set_help_text('Поле только для иконок у которых есть ссылки на соцсети'),
		));

	Container::make( 'post_meta', __( 'Page Options', 'crb' ) )
        ->where( 'post_type', '=', 'page' ) // only show our new fields on pages
		->add_tab(__('Advanced options'), array(
            Field::make( 'complex', 'crb_advanced', 'Advanced options' )
                ->set_layout( 'tabbed-horizontal' )
                ->add_fields( array(
                    Field::make( 'text', 'icon', 'Icon' )
					->set_help_text('Поле только для иконок. Иконки можно найти на сайте <a target="_blank" href="http://fontawesome.io/icons/">здесь</a>. Кликайте на иконку и скопируйте название из атрибута class'),
                    Field::make( 'text', 'title', 'Title' ),
                    Field::make( 'textarea', 'text', 'Text' ),
                ) ),
        ) );

}
