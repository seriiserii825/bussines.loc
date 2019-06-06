<?php
/**
 * Template Name: Auto
 */

get_header();
?>


<main>
<?php

    $auto = new WP_Query([
		'post_type' => 'auto',
        'posts_per_page' => -1,
        'orderby' => 'rand'
    ]);

    $auto_terms = get_terms([
	    'taxonomy' => 'auto_cat',
	    'hide_empty' => false
    ]);

	$auto_colors = get_terms([
		'taxonomy' => 'auto_color',
		'hide_empty' => false
	]);

	$auto_body = get_terms([
		'taxonomy' => 'auto_body',
		'hide_empty' => false
	]);

	function getStrTerms($termObj){
		$all_terms = '';

		foreach ($termObj as $term) {
			$all_terms .= $term->slug . ' ';
		}

		return $all_terms;
    }


?>


	<?php if($auto->have_posts()): ?>
		<section class="well1 ins2 mobile-center auto-wrap">
			<div class="container">
				<h2>The best business auto</h2>

                <div class="auto-tabs-titles">
                    <div data-auto-tab="auto-name" class="auto-tabs-title active">Название автомобилей</div>
                    <div data-auto-tab="auto-color" class="auto-tabs-title">Цвет кузова</div>
                    <div data-auto-tab="auto-body" class="auto-tabs-title">Тип кузова</div>
                </div>

                <div class="auto-tabs-list">
                    <div id="auto-name" class="auto-tabs-list__item">
                        <ul class="auto-list" id="js-auto-list">
                            <li data-filter="*" class="auto-list__item selected">Все марки</li>
		                    <?php foreach ($auto_terms as $auto_term): ?>
                                <li data-filter="<?php echo $auto_term->slug; ?>" class="auto-list__item"><?php echo $auto_term->slug; ?></li>
		                    <?php endforeach; ?>
                        </ul>
                    </div>

                    <div id="auto-color" class="auto-tabs-list__item">
                        <ul class="auto-list" id="js-auto-list-colors">
                            <li data-filter="*" class="auto-list__item">Все марки</li>
		                    <?php foreach ($auto_colors as $auto_color): ?>
                                <li data-filter="<?php echo $auto_color->slug; ?>" class="auto-list__item"><?php echo $auto_color->slug; ?></li>
		                    <?php endforeach; ?>
                        </ul>
                    </div>

                    <div id="auto-body" class="auto-tabs-list__item">
						<ul class="auto-list" id="js-auto-list-body">
							<li data-filter="*" class="auto-list__item selected">Все марки</li>
							<?php foreach ($auto_body as $auto_body_item): ?>
								<li data-filter="<?php echo $auto_body_item->slug; ?>" class="auto-list__item"><?php echo $auto_body_item->slug; ?></li>
							<?php endforeach; ?>
						</ul>
                    </div>
                </div>


				<div class="auto" id="js-auto">
				<?php $i = 1; while($auto->have_posts()): ?>
					<?php
						$auto->the_post();
						$content = get_the_content();
						$terms_post = wp_get_post_terms($post->ID, 'auto_cat', array('fields' => 'all'));
						$terms_colors = wp_get_post_terms($post->ID, 'auto_color', array('fields' => 'all'));
						$terms_body = wp_get_post_terms($post->ID, 'auto_body', array('fields' => 'all'));
						$terms_str = '';

						foreach ($terms_post as $term_post) {
							$terms_str .= $term_post->slug . ' ';
						}

						foreach ($terms_colors as $term_color) {
							$terms_str .= $term_color->slug . ' ';
						}

						foreach ($terms_body as $term_body_item) {
							$terms_str .= $term_body_item->slug . ' ';
						}
					?>

					<div class="auto__item <?php echo $terms_str; ?>">
                        <?php the_post_thumbnail('full'); ?>
						<h3><?php the_title(); ?></h3>
						<p><?php echo wp_trim_words($content, 20); ?></p>
						<a href="<?php the_permalink(); ?>" class="btn">Read more</a>
					</div>

					<?php $i++; endwhile; ?>
                </div>
            </div>
        </section>
		<?php else: ?>
	<?php endif; ?>
    <?php wp_reset_postdata(); ?>

	<?php
		$help_title = carbon_get_theme_option('crb_help_title') ? carbon_get_theme_option('crb_help_title') : 'Test title' ;
		$help_text = carbon_get_theme_option('crb_help_text') ? carbon_get_theme_option('crb_help_text') : 'Test text' ;
		$help_bg_color = carbon_get_theme_option('crb_help_bg_color') ? carbon_get_theme_option('crb_help_bg_color') : '' ;
		$help_image_id = carbon_get_theme_option('crb_help_image') ? carbon_get_theme_option('crb_help_image') : '' ;
		$help_image_url = wp_get_attachment_image_src($help_image_id, 'full')[0];
		$help_list = carbon_get_theme_option('crb_help_list');

		$count_list = count($help_list);

		$count_list_half = $count_list / 2;

		$first_help_list = array_slice($help_list, 0, $count_list_half);
		$second_help_list = array_slice($help_list, $count_list_half);
	?>

	<section class="well1 ins4 help" style="
										background-color: <?php echo $help_bg_color; ?>;
										background-image: url(<?php echo $help_image_url; ?>);
										background-repeat: no-repeat;
										background-position: center;
										  background-size: cover;
									" >
		<div class="container">
			<div class="row">
				<div class="grid_7 preffix_5">
					<h2><?php echo $help_title; ?></h2>
                    <p><?php echo $help_text; ?></p>
					<div class="row off4">
						<div class="grid_3">
							<ul class="marked-list wow fadeInRight help-list">
                                <?php foreach ($first_help_list as $item): ?>
								<li><a href="#"><?php echo $item['crb_help_list_text']; ?></a></li>
								<?php endforeach; ?>
							</ul>
						</div>
						<div class="grid_3">
							<ul data-wow-delay="0.2s" class="marked-list wow fadeInRight help-list">
								<?php foreach ($second_help_list as $item): ?>
                                    <li><a href="#"><?php echo $item['crb_help_list_text']; ?></a></li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="well1">
		<div class="container">
			<h2 class="mobile-center">Price list</h2>
			<div class="row">
				<div class="grid_4">
					<table class="wow fadeInUp">
                        <?php $price_list_1 = carbon_get_theme_option('crb_price_list_1'); ?>
                        <?php foreach($price_list_1 as $item): ?>
						<tr>
							<td><?php echo $item['crb_price_list_text']; ?></td>
							<td> от <?php echo $item['crb_price_list_money']; ?> рублей</td>
						</tr>
                        <?php endforeach; ?>
					</table>
				</div>
				<div class="grid_4">
					<table data-wow-delay="0.2s" class="wow fadeInUp">
						<?php $price_list_2 = carbon_get_theme_option('crb_price_list_2'); ?>
						<?php foreach($price_list_2 as $item): ?>
                            <tr>
                                <td><?php echo $item['crb_price_list_text']; ?></td>
                                <td> от <?php echo $item['crb_price_list_money']; ?> рублей</td>
                            </tr>
						<?php endforeach; ?>
					</table>
				</div>
				<div class="grid_4">
					<table data-wow-delay="0.4s" class="wow fadeInUp">
						<?php $price_list_3 = carbon_get_theme_option('crb_price_list_3'); ?>
						<?php foreach($price_list_3 as $item): ?>
                            <tr>
                                <td><?php echo $item['crb_price_list_text']; ?></td>
                                <td> от <?php echo $item['crb_price_list_money']; ?> рублей</td>
                            </tr>
						<?php endforeach; ?>
                    </table>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
//get_sidebar();
get_footer();
