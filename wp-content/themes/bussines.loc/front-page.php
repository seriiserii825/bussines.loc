<?php get_header(); ?>
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

    <?php // TODO post type services with animation ?>


	<section class="well ins1">
		<div class="container hr">
			<ul class="row product-list">
				<li class="grid_6">
					<div class="box wow fadeInRight">
						<div class="box_aside">
							<div class="icon fa-comments"></div>
						</div>
						<div class="box_cnt__no-flow">
							<h3><a href="#">Incididunt ut labore et dolore</a></h3>
							<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>
						</div>
					</div>
					<hr>
					<div data-wow-delay="0.2s" class="box wow fadeInRight">
						<div class="box_aside">
							<div class="icon fa-calendar-o"></div>
						</div>
						<div class="box_cnt__no-flow">
							<h3><a href="#">Incididunt ut labore et dolore</a></h3>
							<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>
						</div>
					</div>
				</li>
				<li class="grid_6">
					<div data-wow-delay="0.3s" class="box wow fadeInRight">
						<div class="box_aside">
							<div class="icon fa-group"></div>
						</div>
						<div class="box_cnt__no-flow">
							<h3><a href="#">Incididunt ut labore et dolore</a></h3>
							<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>
						</div>
					</div>
					<hr>
					<div data-wow-delay="0.4s" class="box wow fadeInRight">
						<div class="box_aside">
							<div class="icon fa-thumbs-up"></div>
						</div>
						<div class="box_cnt__no-flow">
							<h3><a href="#">Incididunt ut labore et dolore</a></h3>
							<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</section>

	<section class="well1">
		<div class="container">
			<div class="row">
				<div class="grid_4">
					<h2>About</h2><img src="<?php echo get_template_directory_uri(); ?>/assets/images/page-1_img01.jpg" alt="">
					<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatu. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p><a href="#" class="btn">Read more</a>
				</div>
				<div class="grid_4">
					<h2>Services</h2>
					<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					<ul class="marked-list">
						<li><a href="#">Lorem ipsum dolor sit amet </a></li>
						<li><a href="#">Conse ctetur adipisicing</a></li>
						<li><a href="#">Elit sed do eiusmod tempor</a></li>
						<li><a href="#">Incididunt ut labore</a></li>
						<li><a href="#">Et dolore magna aliqua</a></li>
						<li><a href="#">Ut enim ad minim veniam</a></li>
						<li><a href="#">Quis nostrud exercitation</a></li>
						<li><a href="#">Incididunt ut labore</a></li>
						<li><a href="#">Et dolore magna aliqua</a></li>
					</ul><a href="#" class="btn">Read more</a>
				</div>
				<div class="grid_4">
					<div class="info-box">
						<h2 class="fa-comment">Help center</h2>
						<hr>
						<h3>Ask professionals:</h3>
						<dl>
							<dt>Monday - Friday:</dt>
							<dd>8am-7pm</dd>
						</dl>
						<dl>
							<dt>Saturday:</dt>
							<dd>8am-5pm</dd>
						</dl>
						<dl>
							<dt>Sunday:</dt>
							<dd>1pm-5pm</dd>
						</dl>
						<hr>
						<h3>24/7 Online Support:</h3>
						<dl>
							<dt>800-2345-6789</dt>
						</dl>
					</div>
					<div class="owl-carousel">
						<div class="item">
							<blockquote class="box">
								<div class="box_aside"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/page-1_img02.jpg" alt=""></div>
								<div class="box_cnt__no-flow">
									<p>
										<q>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</q>
									</p>
									<cite><a href="#">Incididunt ut labor</a></cite>
								</div>
							</blockquote>
						</div>
						<div class="item">
							<blockquote class="box">
								<div class="box_aside"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/page-1_img03.jpg" alt=""></div>
								<div class="box_cnt__no-flow">
									<p>
										<q>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</q>
									</p>
									<cite><a href="#">Incididunt ut labor</a></cite>
								</div>
							</blockquote>
						</div>
						<div class="item">
							<blockquote class="box">
								<div class="box_aside"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/page-1_img04.jpg" alt=""></div>
								<div class="box_cnt__no-flow">
									<p>
										<q>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</q>
									</p>
									<cite><a href="#">Incididunt ut labor</a></cite>
								</div>
							</blockquote>
						</div>
						<div class="item">
							<blockquote class="box">
								<div class="box_aside"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/page-1_img05.jpg" alt=""></div>
								<div class="box_cnt__no-flow">
									<p>
										<q>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</q>
									</p>
									<cite><a href="#">Incididunt ut labor</a></cite>
								</div>
							</blockquote>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
