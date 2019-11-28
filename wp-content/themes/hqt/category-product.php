
<?php get_header(); ?>

<main class="products">
    <div class="banner"></div>
    <div class="container">
        <div class="w">
            <div class="left-container">
                <div class="products-container">
                    <div class="title"><strong>PRODUCTS</strong></div>
                    <div class="box">
                        <?php get_template_part('menu-left'); ?>
                    </div>
                </div>
                <?php get_template_part('recommended'); ?>
            </div>
            <div class="right-container">
                <?php if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb('<div class="breadcrumbs">','</div>');
                } ?>
                <div class="list">
                    <?php if(have_posts()) : ?>
                        <?php while(have_posts()) : the_post(); ?>
                            <div class="item">
                                <a href="<?php the_permalink(); ?>" class="box">
                                    <?php the_post_thumbnail( array(285,360) ); ?>
                                    <div class="text">
                                        <strong><?php the_title();?></strong>
<!--                                        <span>--><?php //the_field('caizhi'); ?><!--</span>-->
                                    </div>
                                    <div class="float">
                                        <p><?php the_title();?></p>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    
                        <?php
                        the_posts_pagination( array(
                            'mid_size'  => 2,
                            'prev_text' => __( 'Prev', 'textdomain' ),
                            'next_text' => __( 'Next', 'textdomain' ),
                        ) );
                        ?>

                    <?php else : ?>
                        no products!
                    <?php endif; ?>


                </div>

            </div>
        </div>
    </div>
</main>



<?php get_footer(); ?>

<script>
    $(function () {


    })
</script>
</body>
</html>