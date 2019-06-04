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
	));
