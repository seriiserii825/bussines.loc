<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bussines
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site page">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bussines' ); ?></a>

	<header>
		<div class="container">
			<div class="brand">
				<?php if(is_front_page() && is_home()): ?>
					<?php if(ot_get_option('logo_upload')): ?>
							<h1 class="brand_name">
								<img src="<?php echo ot_get_option('logo_upload'); ?>" alt="">
							</h1>
						<?php else: ?>
							<h1 class="brand_name"><?php bloginfo('name'); ?></h1>
					<?php endif; ?>
				<?php else: ?>
					<div class="brand_name"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></div>
				<?php endif; ?>

				<?php if(ot_get_option('description_on_off') === 'on') : ?>
					<p class="brand_slogan"><?php bloginfo('description'); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
