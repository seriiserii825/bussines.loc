<?php get_header(); ?>
    <main>
        <div class="container">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): ?>
                    <?php the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
                <?php else: ?>
            <?php endif; ?>

        </div>
    </main>
<?php get_footer(); ?>
