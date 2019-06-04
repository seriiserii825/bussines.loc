<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options()
{
require_once __DIR__.'/theme-options.php';

	/**
	 * features
	 */
	Container::make('post_meta', __('Post meta'))
		->where('post_type', '=', 'features')
		->add_fields(array(
			Field::make('text', 'crb_features_icon', 'Название иконки')
				->set_help_text('Название иконки нужно взять с сайта https://fontawesome.com/icons?from=io'),
		));

require_once __DIR__.'/home.php';
require_once __DIR__.'/about.php';
require_once __DIR__.'/awards.php';

}
