

    <?php get_header(); ?>

    <main class="products">
        <div class="banner">
            <a href="https://www.gyjalufoil.com/product"></a>
        </div>
        <div class="container">
            <div class="w">
                <div class="left-container">
                    <div class="products-container">
                        <div class="title"><strong>News</strong></div>
                        <div class="box">
                            <?php //get_template_part('menu-left'); ?>
                            <ul id="menu-left-menu" class="">
<!--                                <li>-->
<!--                                    --><?php //$cat_id = 36; printf('<a href="%s">%s</a>', get_category_link($cat_id), get_the_category_by_ID($cat_id) );?>
<!--                                    <i class="arrow"><img src="/lib/img/products/triangle.svg" alt=""></i>-->
<!--                                    <ul class="sub-menu">-->
                                        <?php $cat_id = 37; printf('<li><a href="%s">%s</a></li>', get_category_link($cat_id), get_the_category_by_ID($cat_id) );?>
                                        <?php $cat_id = 38; printf('<li><a href="%s">%s</a></li>', get_category_link($cat_id), get_the_category_by_ID($cat_id) );?>
<!--                                    </ul>-->
<!--                                </li>-->
                            </ul>

                        </div>
                    </div>
                    <!-- <?php get_template_part('recommended'); ?> -->
                </div>
                <div class="right-container">
                    <?php if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb('<div class="breadcrumbs">','</div>');
                    } ?>
                    <div class="news-list">


                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post();
                                if (is_sticky()):
                                    global $more;
                                    $more = 1;
                            ?>
                                    <a href="<?php the_permalink(); ?>" class="box">
                                        <div class="box">
                                            <div class="img-box">
                                                <img src="<?php the_post_thumbnail_url('full'); ?>">
                                            </div>
                                            <div class="text">
                                                <h3 style="color: darkred;"><?php the_title(); ?></h3>
                                                <span>Port: <?php the_time('Y-m-d'); ?></span>
                                                <?php the_excerpt(); ?>
                                            </div>
                                        </div>
                                    </a>
                                <?php else:
                                    global $more;
                                    $more = 0;
                                    ?>
                                <a href="<?php the_permalink(); ?>" class="box">
                                    <div class="box">
                                        <div class="img-box">
                                            <img src="<?php the_post_thumbnail_url('full'); ?>">
                                        </div>
                                        <div class="text">
                                            <h3><?php the_title(); ?></h3>
                                            <span>Port: <?php the_time('Y-m-d'); ?></span>
                                            <?php the_excerpt(); ?>
                                        </div>
                                    </div>
                                </a>
                                <?php endif; ?>
                            <?php endwhile; ?>

                            <?php
                                the_posts_pagination(array(
                                    'mid_size'  => 2,
                                    'prev_text' => __('Prev', 'textdomain'),
                                    'next_text' => __('Next', 'textdomain'),
                                ));
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
        $(function() {


        })
    </script>
</body>

</html>