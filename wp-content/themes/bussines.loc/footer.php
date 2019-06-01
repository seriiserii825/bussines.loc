<footer>
    <section class="well3">
        <div class="container">
            <ul class="row contact-list">
                <?php $socials = new WP_Query([
					'post_type' => 'socials',
                    'posts_per_page' => 6,
                    'order' => 'ASC'
                ]); ?>
                <?php if($socials->have_posts()): ?>
					<?php $i = 1;  while($socials->have_posts()): ?>
                        <?php $socials->the_post(); ?>
                            <?php if($i % 2 != 0): ?>
							<li class="grid_4">
							<?php endif; ?>
								<div class="box">
									<div class="box_aside">
										<div class="icon2 <?php echo carbon_get_the_post_meta('crb_social_icon') ?>"></div>
									</div>
									<div class="box_cnt__no-flow">
										<?php
											$title = get_the_title();
											$social_type = carbon_get_the_post_meta('crb_social_type_icon');
											$title_phone = str_replace([' ', '-', '(', ')'], '', $title);
										?>

										<?php if($social_type == 'address'): ?>
										   <address><?php the_title(); ?></address>
											<?php elseif ($social_type == 'phone'): ?>
											<a href="callto:<?php echo $title_phone; ?>"><?php the_title(); ?></a>
											<?php elseif ($social_type == 'email'): ?>
											<a href="mailto:<?php the_title(); ?>"><?php the_title(); ?></a>
											<?php else: ?>
											<a href="<?php echo carbon_get_the_post_meta('crb_social_link'); ?>"><?php the_title(); ?></a>
										<?php endif; ?>
									</div>
								</div>
							<?php if($i % 4 == 0): ?>
							</li>
							<?php endif; ?>
                    <?php $i++; endwhile; ?>
                    <?php else: ?>
                        <h1>Добавьте иконки для соцсетей из меню соцсети из админки</h1>
                <?php endif; ?>
            </ul>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="copyright">Business Company © <span id="copyright-year"></span>.&nbsp;&nbsp;<a href="index-5.html">Privacy Policy</a>More Business Website Templates at <a rel="nofollow" href="http://www.templatemonster.com/category/business-web-templates/" target="_blank">TemplateMonster.com</a>
            </div>
        </div>
    </section>
</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>

