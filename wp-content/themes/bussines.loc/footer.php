<footer>
    <?php $socials_icons = carbon_get_theme_option('crb_social_icons'); ?>

    <?php if($socials_icons): ?>
		<section class="well3">
			<div class="container">
				<ul class="row contact-list">
					<?php $i = 1; foreach ($socials_icons as $soc_icon): ?>
                        <?php if($i % 2 != 0): ?>
							<li class="grid_4">
							<?php endif; ?>
								<div class="box">
									<div class="box_aside">
										<div class="icon2 <?php echo $soc_icon['icon'] ?>"></div>
									</div>
									<div class="box_cnt__no-flow">
                                        <?php $soc_icon_sel = $soc_icon['crb_social_icons_select']; ?>
                                        <?php if($soc_icon_sel === 'address'): ?>
											<address><?php echo $soc_icon['link']; ?></address>
                                        <?php elseif ($soc_icon_sel === 'email'): ?>
											<a href="mailto:<?php echo $soc_icon['link']; ?>"><?php echo $soc_icon['link']; ?></a>
                                        <?php elseif ($soc_icon_sel === 'phone'): ?>
                                            <a href="callto:<?php echo str_replace(['-', '(', ')'], '', $soc_icon['link']); ?>"><?php echo $soc_icon['link']; ?></a>
                                        <?php else:  ?>
                                            <a href="#"><?php echo $soc_icon['link']; ?></a>
                                        <?php endif; ?>
                                    </div>
								</div>
							<?php if($i % 4 == 0): ?>
							</li>
							<?php endif; ?>
					<?php $i++; endforeach; ?>
				</ul>
			</div>
		</section>
    <?php else: ?>
    <h1 class="text-center">Добавьте иконки из секции "Настройки темы" из адмники из секции "Footer Icons"</h1>
    <?php endif; ?>
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

