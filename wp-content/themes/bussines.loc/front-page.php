<?php get_header(); ?>
<?php $page = get_page_by_title('Home' ); ?>
<?php $page_id = $page->ID; ?>
<main>

    <?php
		$slider = carbon_get_the_post_meta('crb_slider');
	?>

    <?php if($slider): ?>
        <section class="camera_container">
			<div id="camera" class="camera_wrap">
			<?php foreach ($slider as $slide): ?>
				<?php $slider_img_url = wp_get_attachment_image_src((int)$slide['image'], 'full'); ?>
					<div data-src="<?php echo $slider_img_url[0]; ?>">
						<div class="camera_caption fadeIn">
							<div class="container">
								<div class="row">
									<div class="preffix_6 grid_6"><?php echo $slide['title']; ?></div>
								</div>
							</div>
						</div>
					</div>
			<?php endforeach; ?>
            </div>
        </section>
    <?php else: ?>
        <div>
            <h1 style="color: red; margin-bottom: 80px; text-align: center;">Место для слайдера со странице Home в настройках</h1>
        </div>
	<?php endif; ?>


    <?php
        $advanced = carbon_get_the_post_meta('crb_advanced');
        $advancedCount = carbon_get_the_post_meta('advanced_count');
        if($advancedCount > count($advanced)){
            $advancedCount = count($advanced) - 1;
        }elseif($advancedCount === ''){
            $advancedCount = 4;
        }

        $advanced = array_slice($advanced, 0, $advancedCount);
	?>

    <?php if($advanced): ?>
		<section>
			<div class="container banner_wr">
				<ul class="banner">
                    <?php foreach ($advanced as $item): ?>
						<li>
							<div class="<?php echo $item['icon']; ?>"></div>
							<h3><?php echo $item['title']; ?></h3>
							<p><?php echo $item['text']; ?>></p>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</section>
    <?php endif; ?>

    <?php $features = new WP_Query([
		'post_type' => 'features',
        'posts_per_page' => 4
    ]); ?>

    <?php if($features): ?>
	<section class="well ins1">
		<div class="container hr">
			<ul class="product-list">
                <?php if($features->have_posts()): ?>
                    <?php $i = 1; while($features->have_posts()): ?>
                        <?php $features->the_post(); ?>
                        <li class="box wow fadeInRight" data-wow-delay="0.<?php echo $i; ?>s">
                            <div>
                                <div class="box_aside">
                                    <div class="icon <?php echo carbon_get_the_post_meta('crb_features_icon'); ?>"></div>
                                </div>
                                <div class="box_cnt__no-flow">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                            </div>
                        </li>
                    <?php $i += 2; endwhile; ?>
                    <?php else: ?>
                <h1 style="color: red; text-align: center;">Добавьте блок преимуществ из кастомныго типа записей</h1>
                <?php endif; ?>

		</div>
	</section>
	<?php endif; ?>
    <?php wp_reset_postdata(); ?>

	<section class="well1">
		<div class="container">
			<div class="row">
				<div class="grid_4 wow fadeInLeft">

                    <?php if(carbon_get_post_meta($page_id, 'crb_block_about_title')): ?>
					<h2><?php echo carbon_get_post_meta($page_id, 'crb_block_about_title'); ?></h2>
                    <?php else: ?>
                    <h1 class="text-center">Title for block about</h1>
                    <?php endif; ?>

                    <?php $img_id = carbon_get_post_meta($page_id, 'crb_block_about_image'); ?>
                    <?php $img_url = wp_get_attachment_image_src($img_id, 'full'); ?>

					<?php if($img_id): ?>
                        <img src="<?php echo $img_url[0]; ?>" alt="">
                    <?php else: ?>
                        <h1 class="text-center">Image for block About</h1>
                    <?php endif; ?>

					<?php if(carbon_get_post_meta($page_id, 'crb_block_about_text')): ?>
					<p><?php echo carbon_get_post_meta($page_id, 'crb_block_about_text') ?></p><a href="#" class="btn">Read more</a>
                    <?php else: ?>
                        <h1 class="text-center">Text for block About</h1>
                    <?php endif; ?>
				</div>
				<div class="grid_4 wow fadeInUp">
					<h2>Services</h2>
					<?php if(carbon_get_post_meta($page_id, 'crb_block_services_text')): ?>
                        <p><?php echo carbon_get_post_meta($page_id, 'crb_block_services_text') ?></p>
					<?php else: ?>
                        <h1 class="text-center">Text for block About</h1>
					<?php endif; ?>

					<?php $services_count = carbon_get_post_meta($page_id, 'crb_block_services_count') ? carbon_get_post_meta($page_id, 'crb_block_services_count') : -1 ?>

                    <?php $services = new WP_Query([
						'category_name' => 'services',
                        'posts_per_page' => $services_count
                    ]); ?>

                    <?php if($services->have_posts()): ?>
                    <ul class="marked-list">
                        <?php while($services->have_posts()): ?>
                            <?php $services->the_post(); ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

                        <?php endwhile; ?>
                    </ul>
					<a href="#" class="btn">Read more</a>
                        <?php else: ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
				</div>

				<div class="grid_4">
					<div class="info-box wow fadeInRight ">
						<?php $help_center_title = carbon_get_post_meta($page_id, 'crb_block_help_center_title') ? carbon_get_post_meta($page_id, 'crb_block_help_center_title') : 'Help Center' ?>
						<?php $help_center_work_days = carbon_get_post_meta($page_id, 'crb_block_help_center_work_days') ? carbon_get_post_meta($page_id, 'crb_block_help_center_work_days') : '9am-6pm' ?>
						<?php $help_center_saturday = carbon_get_post_meta($page_id, 'crb_block_help_center_saturday') ? carbon_get_post_meta($page_id, 'crb_block_help_center_saturday') : '9am-2pm' ?>
						<?php $help_center_sunday = carbon_get_post_meta($page_id, 'crb_block_help_center_sunday') ? carbon_get_post_meta($page_id, 'crb_block_help_center_sunday') : '9am-12pm' ?>
						<?php $help_center_phone = carbon_get_post_meta($page_id, 'crb_block_help_center_phone') ? carbon_get_post_meta($page_id, 'crb_block_help_center_phone') : '800-700-300' ?>

						<h2 class="fa-comment"><?php echo $help_center_title; ?></h2>
						<hr>
						<h3>Ask professionals:</h3>

						<dl>
							<dt>Monday - Friday:</dt>
							<dd><?php echo $help_center_work_days; ?></dd>
						</dl>

						<dl>
							<dt>Saturday:</dt>
							<dd><?php echo $help_center_saturday; ?></dd>
						</dl>
						<dl>
							<dt>Sunday:</dt>
							<dd><?php echo $help_center_sunday; ?></dd>
						</dl>
						<hr>
						<h3>24/7 Online Support:</h3>
						<dl>
							<dt><?php echo $help_center_phone; ?></dt>
						</dl>
					</div>

                    <?php $reviews = new WP_Query([
						'post_type' => 'reviews',
                        'posts_per_page' => -1
                    ]); ?>

                    <?php if($reviews->have_posts()): ?>
                    <div class="owl-carousel reviews-slider wow fadeInUp " id="js-reviews">
                        <?php while($reviews->have_posts()): ?>
                            <?php $reviews->the_post(); ?>
                            <div class="item">
                                <blockquote class="box">
                                    <div class="box_aside"><?php the_post_thumbnail('full'); ?></div>
                                    <div class="box_cnt__no-flow">
                                        <p>
                                            <q>
                                                <?php the_excerpt(); ?>
                                            </q>
                                        </p>
                                        <cite><a href="#"><?php the_title(); ?></a></cite>
                                    </div>
                                </blockquote>
                            </div>

                        <?php endwhile; ?>
                    </div>
                        <?php else: ?>
                        <h1 class="text-center">Добавьте посты для салйдера из админки</h1>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
