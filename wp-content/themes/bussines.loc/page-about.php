<?php get_header(); ?>
<?php $page = get_page_by_title('About' ); ?>
<?php $page_id = $page->ID; ?>


<main class="mobile-center">
    <section class="well1 ins3">
        <div class="container">
            <h2><?php the_title(); ?></h2>
            <div class="row off1">
                <div class="grid_6">
                    <?php if(have_posts()): ?>
                        <?php while(have_posts()): ?>
                            <?php the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                        <?php else: ?>
                    <?php endif; ?>
	                <?php $offer_title = carbon_get_post_meta($page_id, 'crb_block_offer_title'); ?>
	                <?php $offer_text = carbon_get_post_meta($page_id, 'crb_block_offer_text'); ?>
	                <?php $offer_gallery = carbon_get_post_meta($page_id, 'crb_media_offer_gallery'); ?>

                    <hr>

                    <h3><?php echo $offer_title; ?></h3>
                    <div class="row">
                        <?php $i = 1; foreach ($offer_gallery as $item): ?>
<!--                        <div data-wow-delay="0.2s" class="grid_3 wow fadeInLeft"><img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/page-2_img01.jpg" alt=""></div>-->
                        <div <?php if($i == 1) echo 'data-wow-delay="0.2s"'; ?> class="grid_3 wow fadeInLeft">
                            <img src="<?php echo wp_get_attachment_image_src(intval($item), 'full')[0]; ?>" alt="">
                        </div>
                        <?php $i++; endforeach; ?>
                    </div>
                    <p><?php echo $offer_text; ?></p>
                </div>
                <div class="grid_6">
                    <?php $stuff_title = carbon_get_post_meta($page_id, 'crb_block_stuff_title'); ?>
	                <?php $stuff_text = carbon_get_post_meta($page_id, 'crb_block_stuff_text'); ?>
                    <?php $stuff_gallery = carbon_get_post_meta($page_id, 'crb_media_gallery'); ?>

                    <h3><?php echo $stuff_title; ?></h3>

                    <div class="row">
                        <?php $i = 1; foreach ($stuff_gallery as $item): ?>
                            <?php if($i % 2 != 0): ?>
                            <div data-wow-delay="0.<?php echo $i+3; ?>" class="grid_2 wow fadeInRight">
                            <?php endif; ?>
                                <img src="<?php echo wp_get_attachment_image_src(intval($item), 'full')[0]; ?>" alt="">
                            <?php if($i % 2 == 0): ?>
                            </div>
                            <?php endif; ?>

                        <?php $i++; endforeach; ?>
                    </div>
                    <p><?php echo $stuff_text; ?></p>
                    <hr>
                    <?php $advantages_title = carbon_get_post_meta($page_id, 'crb_block_advantages_title'); ?>
	                <?php $advantages_text = carbon_get_post_meta($page_id, 'crb_block_advantages_text'); ?>

                    <h3><?php echo $advantages_title; ?></h3>
                    <p><?php echo $advantages_text; ?></p>
                </div>
            </div>
        </div>
    </section>
    <?php $awards = new WP_Query([
		'post_type' => 'awards',
        'posts_per_page' => 6
    ]); ?>

    <?php if($awards->have_posts()): ?>
    <section class="well1 ins3 bg-primary awards">
        <div class="container">
            <h2>Наши награды</h2>
            <div class="product-list">
        <?php $i = 1; while($awards->have_posts()): ?>
            <?php $animation = ($i % 2 != 0) ? 'fadeInLeft' : 'fadeInRight'; ?>

            <?php $awards->the_post(); ?>
            <div class="box wow <?php echo $animation; ?>">
                <div class="box_aside" >
                    <div class="icon <?php echo carbon_get_the_post_meta('crb_block_awards_icon'); ?>"></div>
                </div>
                <div class="box_cnt__no-flow">
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_excerpt(); ?></p>
                </div>
            </div>

        <?php $i++; endwhile; ?>
            </div>
        </div>
    </section>
        <?php else: ?>
    <h1 class="text-center">Добавьте награды из админки</h1>
    <?php endif; ?>

</main>


<?php get_footer(); ?>

