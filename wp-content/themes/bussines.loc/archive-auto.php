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

	<section class="well1 ins4 bg-image">
		<div class="container">
			<div class="row">
				<div class="grid_7 preffix_5">
					<h2>How we can help?</h2>
					<p>Curabitur pellentesque, turpis sit amet iaculis condimentum, urna mi aliquet turpis, itae pharetra mauris eros non arcu. Aenean felis augue, dignissim in tempus eget, cursus sit amet sem? Cras vehicula vehicula nunc id fringilla?</p>
					<div class="row off4">
						<div class="grid_3">
							<ul class="marked-list wow fadeInRight">
								<li><a href="#">Praesent vestibulum molestie</a></li>
								<li><a href="#">Aenean nonummy hendrerit</a></li>
								<li><a href="#">Vivamus eget nibh</a></li>
								<li><a href="#">Etiam cursus leo vel metus</a></li>
							</ul>
						</div>
						<div class="grid_3">
							<ul data-wow-delay="0.2s" class="marked-list wow fadeInRight">
								<li><a href="#">Donec in velit vel ipsum auctor</a></li>
								<li><a href="#">Vestibulum iaculis lacinia est</a></li>
								<li><a href="#">Proin dictum elementum velit</a></li>
								<li><a href="#">Fusce euismod consequat ante</a></li>
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
						<tr>
							<td>Suspendisse sollicitudin velit sed leo</td>
							<td>$ 32.00</td>
						</tr>
						<tr>
							<td>Ut pharetra augue nec augue</td>
							<td>$ 27.00</td>
						</tr>
						<tr>
							<td>Nam elit agna endrerit sit amet</td>
							<td>$ 16.00</td>
						</tr>
						<tr>
							<td>Tincidunt ac viverra sed nulla</td>
							<td>$ 42.00</td>
						</tr>
						<tr>
							<td>Donec porta diam eu massa</td>
							<td>$ 50.00</td>
						</tr>
						<tr>
							<td>Quisque diam lorem interdum vitae</td>
							<td>$ 90.00</td>
						</tr>
					</table>
				</div>
				<div class="grid_4">
					<table data-wow-delay="0.2s" class="wow fadeInUp">
						<tr>
							<td>Tincidunt ac viverra sed nulla</td>
							<td>$ 42.00</td>
						</tr>
						<tr>
							<td>Donec porta diam eu massa</td>
							<td>$ 50.00</td>
						</tr>
						<tr>
							<td>Quisque diam lorem interdum vitae</td>
							<td>$ 32.00</td>
						</tr>
						<tr>
							<td>Scelerisque vitae pede</td>
							<td>$ 27.00</td>
						</tr>
						<tr>
							<td>Donec eget tellus non erat</td>
							<td>$ 16.00</td>
						</tr>
						<tr>
							<td>Lacinia fermentum</td>
							<td>$ 90.00</td>
						</tr>
					</table>
				</div>
				<div class="grid_4">
					<table data-wow-delay="0.4s" class="wow fadeInUp">
						<tr>
							<td>Donec in velit vel ipsum pulvinar</td>
							<td>$ 27.00</td>
						</tr>
						<tr>
							<td>Vestibulum iaculis lacinia est</td>
							<td>$ 42.00</td>
						</tr>
						<tr>
							<td>Proin dictum elementum velit</td>
							<td>$ 50.00</td>
						</tr>
						<tr>
							<td>Fusce euismod consequat ante</td>
							<td>$ 32.00</td>
						</tr>
						<tr>
							<td>Lorem ipsum dolor sit amet</td>
							<td>$ 16.00</td>
						</tr>
						<tr>
							<td>Consectetuer adipiscing elit</td>
							<td>FREE</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
//get_sidebar();
get_footer();
