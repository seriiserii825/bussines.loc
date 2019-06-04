<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;


/**
 * page about
 */
Container::make( 'post_meta', __( 'Page Options', 'crb' ) )
	->where( 'post_type', '=', 'awards' ) // only show our new fields on pages
	/**
	 * Awards
	 */
	->add_fields(array(
		Field::make('text', 'crb_block_awards_icon', 'Block Awards Icon'),
	));
