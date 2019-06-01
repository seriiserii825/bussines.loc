<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <title>Home</title>
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
                    <ul data-type="navbar" class="sf-menu">
                        <li class="active"><a href="./">Home</a>
                        </li>
                        <li><a href="index-1.html">About</a>
                            <ul>
                                <li><a href="#">Lorem ipsum dolor</a></li>
                                <li><a href="#">Conse ctetur adipisicing</a></li>
                                <li><a href="#">Elit sed do eiusmod
                                        <ul>
                                            <li><a href="#">Lorem ipsum</a></li>
                                            <li><a href="#">Conse adipisicing</a></li>
                                            <li><a href="#">Sit amet dolore</a></li>
                                        </ul></a></li>
                                <li><a href="#">Incididunt ut labore</a></li>
                                <li><a href="#">Et dolore magna</a></li>
                                <li><a href="#">Ut enim ad minim</a></li>
                            </ul>
                        </li>
                        <li><a href="index-2.html">Services</a>
                        </li>
                        <li><a href="index-3.html">FAQS</a>
                        </li>
                        <li><a href="index-4.html">Contacts</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

