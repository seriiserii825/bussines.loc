<?php
/**
 * Template Name: Services
 */

get_header();
?>


<main>
    <?php $services = new WP_Query([
		'post_type' => 'services',
        'posts_per_page' => 6
    ]); ?>


	<?php if($services->have_posts()): ?>
		<section class="well1 ins2 mobile-center services-wrap">
			<div class="container">
				<h2>The best business services</h2>
				<div class="services">
				<?php $i = 1; while($services->have_posts()): ?>
					<?php $services->the_post(); ?>

					<div class="services__item wow <?php echo ($i < 4) ? 'fadeInDown' : 'fadeInUp'; ?>">
                        <?php the_post_thumbnail('full'); ?>
						<h3><?php the_title(); ?></h3>
						<p><?php the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>" class="btn">Read more</a>
					</div>

					<?php $i++; endwhile; ?>
                </div>
            </div>
        </section>
		<?php else: ?>
	<?php endif; ?>


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
