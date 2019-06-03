<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="page">
    <header>
        <div class="container">
            <div class="brand">
                <?php if(is_front_page() && is_home()): ?>
                    <?php if(has_custom_logo()): ?>
                        <?php the_custom_logo(); ?>
                        <?php else: ?>
							<h1 class="brand_name">
                                <a href="<?php echo home_url(); ?>">
                                    <?php bloginfo('name'); ?>
                                </a>
                            </h1>
                    <?php endif; ?>
					<?php else: ?>
						<?php if(has_custom_logo()): ?>
							<?php the_custom_logo(); ?>
						<?php else: ?>
							<h1 class="brand_name">Business</h1>
						<?php endif; ?>
                <?php endif; ?>

                <?php if(carbon_get_theme_option('crb_show_content')): ?>
                    <p class="brand_slogan">Company</p>
                <?php endif; ?>

            </div>
            <?php
                $phone = carbon_get_theme_option('crb_phone');
			?>

            <?php if($phone): ?>
				<?php $phone_link = str_replace([' ', '-','(', ')'], '', $phone); ?>
                <a href="callto:<?php echo $phone_link; ?>" class="fa-phone">
                    <?php echo $phone; ?>
                </a>
            <?php endif; ?>

            <?php if(carbon_get_theme_option('crb_hours')): ?>
                <p><?php echo carbon_get_theme_option('crb_hours'); ?></p>
            <?php endif; ?>

            <?php
				$form_title = carbon_get_theme_option('crb_feedback_title');
				$form_shortcode = carbon_get_theme_option('crb_feedback_form');
			?>

            <?php if($form_title && $form_shortcode): ?>
                <p><a class="feedback__link" href="#test-form"><?php echo $form_title; ?></a></p>

            <?php endif; ?>

            <!-- form itself -->
            <form id="test-form" class="white-popup-block mfp-hide feedback__form">
				<?php echo do_shortcode($form_shortcode); ?>
            </form>

        </div>
        <div id="stuck_container" class="stuck_container">
            <div class="container">
                <nav class="nav">
                    <?php
						wp_nav_menu( [
							'theme_location'  => 'primary',
							'menu'            => '',
							'container'       => '',
							'menu_class'      => 'sf-menu',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul data-type="navbar" id="%1$s" class="%2$s">%3$s</ul>',
						] );
                    ?>
                </nav>
            </div>
        </div>
    </header>

