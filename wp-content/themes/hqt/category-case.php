

<?php get_header(); ?>

<main class="case">

    <div class="banner"></div>

    <div class="w">

        <div class="btn">

            <a data-box-id="#case" class="active" href="#">Case</a>

            <a data-box-id="#sloution" href="#">Sloution</a>

        </div>

        <div class="container">

            <div id="case">

                <div class="case-box">
                    <?php if(have_posts()) : ?>
                        <?php while(have_posts()) : the_post(); ?>
                            <div class="item">
                                <div class="img-box">
                                    <img src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="<?php the_title();?>">
                                    <div class="shadow">
                                        <a href="<?php the_permalink(); ?>">More</a>
                                    </div>
                                </div>
                                <div class="text">
                                    <span><?php the_field('biaoqian'); ?></span>
                                    <p><?php the_title();?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php posts_nav_link(); ?>
                    <?php else : ?>
                        没有文章
                    <?php endif; ?>
                </div>

            </div>

            <div id="sloution">

                <div class="sloution-box">

                    <div class="item">

                        <img src="/lib/img/case/sloution_1.jpg" alt="">

                        <strong>Logistics series</strong>

                        <ul>

                            <li>Measures 36" W x 14" D x 54" H</li>

                            <li>Great for the office, garage, kitchen, and more</li>

                            <li>Each shelf holds up to 350 pounds</li>

                            <li>Adjustable leveling feet</li>

                            <li>Durable and stylish black-coated chrome steel construction</li>

                        </ul>

                        <a href="/contact">from $599.00
                            <div class="hover">contact us</div>
                        </a>

                    </div>

                    <div class="item">

                        <img src="/lib/img/case/sloution_2.jpg" alt="">

                        <strong>Logistics series</strong>

                        <ul>

                            <li>Measures 36" W x 14" D x 54" H</li>

                            <li>Great for the office, garage, kitchen, and more</li>

                            <li>Each shelf holds up to 350 pounds</li>

                            <li>Adjustable leveling feet</li>

                            <li>Durable and stylish black-coated chrome steel construction</li>

                        </ul>

                        <a href="/contact">from $699.00
                            <div class="hover">contact us</div>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</main>


<?php get_footer(); ?>

<script>

    $(function () {


        $('.btn a').on('click', function () {


            $(this).addClass('active').siblings().removeClass('active')

            $($(this).data('box-id')).fadeIn().siblings().hide()

        })


    })

</script>
</body>
</html>