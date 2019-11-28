
    <?php get_header(); ?>


    <main class="news">
        <div class="w">
            <?php if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb('<div class="breadcrumbs">','</div>');
            } ?>
            <div class="details">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="title">
                            <h3><?php the_title(); ?></h3>
                        </div>
                        <div class="g-certificates">
                            <?php if( get_field('img01',673) ): ?>
                                <a target="_blank" href="<?php the_field('img01',673); ?>"><img src="<?php the_field('img01',673); ?>" alt="<?php the_title(); ?>"/></a>
                            <?php endif; ?>
                            <?php if( get_field('img02',673) ): ?>
                                <a target="_blank" href="<?php the_field('img02',673); ?>"><img src="<?php the_field('img01',673); ?>"  alt="<?php the_title(); ?>"/></a>
                            <?php endif; ?>
                            <?php if( get_field('img03',673) ): ?>
                                <a target="_blank" href="<?php the_field('img03',673); ?>"><img src="<?php the_field('img03',673); ?>"  alt="<?php the_title(); ?>"/></a>
                            <?php endif; ?>
                            <?php if( get_field('img04',673) ): ?>
                                <a target="_blank" href="<?php the_field('img04',673); ?>"><img src="<?php the_field('img04',673); ?>"  alt="<?php the_title(); ?>"/></a>
                            <?php endif; ?>
                            <?php if( get_field('img05',673) ): ?>
                                <a target="_blank" href="<?php the_field('img05',673); ?>"><img src="<?php the_field('img05',673); ?>"  alt="<?php the_title(); ?>"/></a>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    no product!
                <?php endif; ?>

            </div>
        </div>
    </main>
    <?php get_footer(); ?>
</body>

</html>