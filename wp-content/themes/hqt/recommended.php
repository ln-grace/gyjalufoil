<div class="recommended-container">
    <div class="title"><strong>RECOMMENDED</strong></div>
    <div class="box">
        <ul>
            <?php
            $args = array(
                'post_type' => 'post',
                'showposts' => 3,
//                'orderby' => 'rand',
                'post__in' => get_option('sticky_posts'),
                'cat' => array(-36,-37,-38),
            );
            $my_query = new WP_Query($args);
            if( $my_query->have_posts() ) {
                while ($my_query->have_posts()) : $my_query->the_post();
                    if (is_sticky()):
                        global $more;    // 设置全局变量$more
                        $more = 1;
                        ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail( array(88,88) ); ?>
                            <strong><?php the_title();?></strong>
                        </a>
                    </li>
                    <?php else:
                        global $more;
                        $more = 0;
                        ?>
<!--                    No RECOMMENDED!-->
                    <?php endif; ?>
                <?php endwhile; wp_reset_query(); } ?>
        </ul>
    </div>
</div>