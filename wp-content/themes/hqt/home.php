
    <?php get_header(); ?>

    <main class="index">
        <div class="banner">
            <!-- Swiper -->
            <div class="swiper-container swiper-banner">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="<?php the_field('blink01', 35); ?>">
                            <img src="<?php the_field('banner01', 35); ?>" alt="banner">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="<?php the_field('blink02', 35); ?>">
                            <img src="<?php the_field('banner02', 35); ?>" alt="banner">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="<?php the_field('blink03', 35); ?>">
                            <img src="<?php the_field('banner03', 35); ?>" alt="banner">
                        </a>
                    </div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
            </div>
        </div>

        <!-- 优势 start -->
        <!-- <div class="advantage">
            <div class="w">
                <div class="item">
                    <strong><?php the_field('cases', 35); ?></strong>
                    <p>Case</p>
                </div>
                <div class="line"></div>
                <div class="item">
                    <strong><?php the_field('partners', 35); ?></strong>
                    <p>Partners</p>
                </div>
                <div class="line"></div>
                <div class="item">
                    <strong><?php the_field('clients', 35); ?></strong>
                    <p>Clients</p>
                </div>
            </div>
        </div> -->
        <!-- 优势 end -->

        <!-- 关于我们 start -->
        <div class="about">
            <div class="common-title" style="padding: 0 50px">
                <img src="/lib/img/index/tittle_1.png" alt="">
            </div>
            <div class="container">
                <div class="w">
                    <div class="intro">
                        <h2>OUR COMPANY</h2>
                        <p><?php the_field('our_company', 35); ?></p>
                        <a onClick="ga('send', 'event', 'book retailer', 'click', 'Barnes&Noble', 5, True);" href="/about">Read More</a>
                    </div>
                    <div class="photo">
                        <!-- Swiper -->
                        <div class="swiper-container swiper-about">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="img-box">
                                        <img src="<?php the_field('timg01', 35); ?>" alt="">
                                        <div class="text">
                                            <p><?php the_field('timgsm01', 35); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img-box">
                                        <img src="<?php the_field('timg02', 35); ?>" alt="">
                                        <div class="text">
                                            <p><?php the_field('timgsm02', 35); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img-box">
                                        <img src="<?php the_field('timg03', 35); ?>" alt="">
                                        <div class="text">
                                            <p><?php the_field('timgsm03', 35); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img-box">
                                        <img src="<?php the_field('timg04', 35); ?>" alt="">
                                        <div class="text">
                                            <p><?php the_field('timgsm04', 35); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>

                        <!-- <div class="mobile">
                            <div class="img-box">
                                <img src="<?php the_field('timg01', 35); ?>" alt="">
                                <div class="text">
                                    <p><?php the_field('timgsm01', 35); ?></p>
                                </div>
                            </div>
                            <div class="img-box">
                                <img src="<?php the_field('timg02', 35); ?>" alt="">
                                <div class="text">
                                    <p><?php the_field('timgsm02', 35); ?></p>
                                </div>
                            </div>
                            <div class="img-box">
                                <img src="<?php the_field('timg03', 35); ?>" alt="">
                                <div class="text">
                                    <p><?php the_field('timgsm03', 35); ?></p>
                                </div>
                            </div>
                            <div class="img-box">
                                <img src="<?php the_field('timg04', 35); ?>" alt="">
                                <div class="text">
                                    <p><?php the_field('timgsm04', 35); ?></p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- 关于我们 end -->

        <!-- 专注 start -->
        <div class="foucs-on">
            <div class="common-title">
                <img src="/lib/img/index/tittle_2.png" alt="">
            </div>
            <div class="container">
                <div class="w">
                    <div id="foucs-on-tab">
                        <!-- <div class="tab-btn">
                            <a data-box-id="#foucs-box-1" href="javascript:" class="active">Application</a>
                            <a data-box-id="#foucs-box-2" href="javascript:">Accessories</a>
                        </div> -->
                        <div class="tab-container">
                            <div id="foucs-box-1" class="tab-box active">
                                <div class="left-container">

                                    <a href="<?php the_field('focus01link', 35); ?>" class="box">
                                        <div class="text">
                                            <strong><?php the_field('focus01title', 35); ?></strong>
                                            <p><?php the_field('focus01description', 35); ?></p>
                                            <span>Read More</span>
                                        </div>
                                        <div class="img-box">
                                            <img src="<?php the_field('focus01img', 35); ?>" alt="<?php the_field('focus01title', 35); ?>">
                                        </div>
                                    </a>

                                    <a href="<?php the_field('focus02link', 35); ?>" class="box">
                                        <div class="img-box"><img src="<?php the_field('focus02img', 35); ?>" alt="<?php the_field('focus02title', 35); ?>"></div>
                                        <div class="text">
                                            <strong><?php the_field('focus02title', 35); ?></strong>
                                            <p><?php the_field('focus02description', 35); ?></p>
                                            <span>Read More</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="right-container">
                                    <!--Beam Shelf-->
                                    <a href="<?php the_field('focus03link', 35); ?>" class="box">
                                        <div class="img-box"><img src="<?php the_field('focus03img', 35); ?>" alt="<?php the_field('focus03title', 35); ?>"></div>
                                        <div class="text">
                                            <strong><?php the_field('focus03title', 35); ?></strong>
                                            <p><?php the_field('focus03description', 35); ?></p>
                                            <span>Read More</span>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="view-all">
                        <a href="/product">View All</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- 专注 end -->

        <!-- 经典案例 start -->
        <!-- <div class="classic-case">
            <div class="common-title">
                <img src="/lib/img/index/tittle_3.png" alt="">
            </div>
            <div class="container">
                <div class="w">


                    <?php query_posts('cat=9&showposts=6');
                    ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <div class="item">
                            <div class="img-box">
                                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                                <div class="shadow">
                                    <a href="<?php the_permalink(); ?>">More</a>
                                </div>
                            </div>
                            <div class="text">
                                <span><?php the_field('biaoqian'); ?></span>
                                <p><?php the_title(); ?></p>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_query(); ?>

                </div>
            </div>
        </div> -->
        <!-- 经典案例 end -->

        <!-- 不同的 start -->
        <!-- <div class="different-solutions">
            <div class="common-title">
                <img src="/lib/img/index/tittle_4.png" alt="">
            </div>
            <div class="container">
                <div class="w">
                    <div class="item" style="background: url('/lib/img/index/bg_1.jpg')">
                        <strong>Logistics series</strong>
                        <span>From $300.00</span>
                        <a href="/case"></a>
                    </div>
                    <div class="item" style="background: url('/lib/img/index/bg_2.jpg')">
                        <strong>E-commerce series</strong>
                        <span>From $699.00</span>
                        <a href="/case"></a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- 不同的 end -->

        <div class="how-to-define-us">
            <div class="title">
                <span>HOW TO DEFINE US</span>
                <h2>WHAT MAKES US DIFFERENT</h2>
            </div>
            <div class="container">
                <div class="w">
                    <div class="item">
                        <img src="/lib/img/index/icon_1.png" alt="">
                        <strong>Advanced equipments</strong>
                        <p>We invested a lot of money to update manufacturing equipment to ensure product quality.</p>
                    </div>
                    <div class="item">
                        <img src="/lib/img/index/icon_2.png" alt="">
                        <strong>Experience</strong>
                        <p>16 years of experience in aluminum foil industry.</p>
                    </div>
                    <div class="item">
                        <img src="/lib/img/index/icon_3.png" alt="">
                        <strong>Strong team</strong>
                        <p> We have a team of professional engineers with more than 100 people.</p>
                    </div>
                    <div class="item">
                        <img src="/lib/img/index/icon_4.png" alt="">
                        <strong>Quick production</strong>
                        <p>Delivered within 20-25 days.</p>
                    </div>
                    <div class="item">
                        <img src="/lib/img/index/icon_5.png" alt="">
                        <strong>Quality</strong>
                        <p>Our products are subject to three rigorous inspections to ensure quality for every shipment.</p>
                    </div>
                    <div class="item">
                        <img src="/lib/img/index/icon_6.png" alt="">
                        <strong>Rich in products</strong>
                        <p>High-quality aluminum foil for a variety of applications.</p>
                    </div>
                    <div class="item">
                        <img src="/lib/img/index/icon_7.png" alt="">
                        <strong>Production line</strong>
                        <p>We have more than 30 production lines to ensure production speed.</p>
                    </div>
                    <div class="item">
                        <img src="/lib/img/index/icon_8.png" alt="">
                        <strong>After-sales service</strong>
                        <p>Regardless of whether it is online or offline, we have established a comprehensive
                            after-sales guarantee system.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 推荐 start -->
        <div class="recommended">
            <div class="common-title">
                <img src="/lib/img/index/tittle_5.png" alt="">
            </div>
            <div class="container">
                <div class="w">
                    <!-- Swiper -->
                    <div class="swiper-container swiper-recommended">
                        <div class="swiper-wrapper">

                            <?php
                            $args = array(
                                'post_type' => 'post',
                                'showposts' => 9,
                                'cat' => array(20, 18, 30, 27, 39),
                            );
                            $my_query = new WP_Query($args);
                            if ($my_query->have_posts()) {
                                while ($my_query->have_posts()) : $my_query->the_post(); ?>
                                    <div class="swiper-slide">
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                                            <div class="text">
                                                <strong><?php the_title(); ?></strong>
                                                <!--                                                <span>--><?php //the_field('caizhi');
                                                                                                                        ?>
                                                <!--</span>-->
                                            </div>
                                            <div class="float">
                                                <p><?php the_title(); ?></p>
                                            </div>
                                        </a>
                                    </div>
                            <?php endwhile;
                                wp_reset_query();
                            } ?>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 推荐 end -->

        <!-- 伙伴 start -->
        <!-- <div class="partners">
            <div class="common-title">
                <img src="/lib/img/index/tittle_6.png" alt="">
            </div>
            <div class="container">
                <div class="w">
                    <img src="/lib/img/index/panters.png" alt="">
                </div>
            </div>
        </div> -->
        <!-- 伙伴 end -->

        <!-- contact us start -->
        <div class="contact-us" id="contact-us">
            <div class="common-title">
                <img src="/lib/img/index/tittle_7.png" alt="">
            </div>
            <div class="container">
                <div class="w">

                    <?php //echo do_shortcode('[contact-form-7 id="6"]'); 
                    ?>
                    <form action="/success" method="post" class="form">
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="6">
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f6-o1">
                            <input type="hidden" name="_wpcf7_container_post" value="0">
                        </div>
                        <div class="form-box">
                            <label for="">YOUR NAME</label>
                            <input type="text" name="your-name" id="user_name">
                        </div>
                        <div class="form-box">
                            <label for="">YOUR E-MAIL</label>
                            <input type="email" name="your-email" id="email">
                        </div>
                        <div class="form-box">
                            <label for="">YOUR MESSAGE</label>
                            <textarea name="your-subject" id="message" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-box">
                            <input type="submit" value="Send Message" id="submit">
                        </div>
                        <p id="alert"></p>
                    </form>
                    <div class="info">
                        <div class="item">
                            <strong><img src="/lib/img/faq/contact_icon_call.png" alt="">Call Us</strong>
                            <p><?php if (get_field('tel02', 35)) : ?>
                                    Phone: <?php the_field('tel02', 35); ?>
                                <?php endif; ?></p>
                            <p><?php if (get_field('zuoji', 35)) : ?>
                                    Tel: <?php the_field('zuoji', 35); ?>
                                <?php endif; ?></p>
                            <p><?php if (get_field('zuoji02', 35)) : ?>
                                    Fax: <?php the_field('zuoji02', 35); ?>
                                <?php endif; ?></p>
                            <p><?php if (get_field('skype', 35)) : ?>
                                    WhatsApp/Skype: <?php the_field('skype', 35); ?>
                                <?php endif; ?></p>
                        </div>
                        <div class="item">
                            <strong><img src="/lib/img/faq/contact_icon_email.png" alt="">Say Hello</strong>
                            <p><?php the_field('email02', 35); ?></p>
                            <p><?php the_field('email', 35); ?></p>
                        </div>
                        <div class="item">
                            <strong><img src="/lib/img/faq/contact_icon_add.png" alt="">Address</strong>
                            <p><?php the_field('address', 35); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="empty"></div>
        </div>
        <!-- contact end -->
    </main>

    <?php get_footer(); ?>

    <script>
        $(function() {

            // banner轮播图
            var swiper_banner = new Swiper('.swiper-banner', {
                spaceBetween: 10,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                autoplay: {
                    delay: 3000,
                    stopOnLastSlide: false,
                    disableOnInteraction: true,
                }
            });

            // 关于我们轮播
            var swiper_about = new Swiper('.swiper-about', {
                spaceBetween: 10,
                slidesPerView: 2,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    768: {
                        slidesPerView: 1,
                    },
                    1200: {
                        slidesPerView: 2,
                    }
                }
            });

            // foucs on tab栏切换
            $('#foucs-on-tab .tab-btn a').on('click', function() {

                $(this).addClass('active').siblings().removeClass('active')
                $($(this).data('box-id')).addClass('active').siblings().removeClass('active')
            })

            if ($(window).width() <= 767) {

                var swiper_recommended = new Swiper('.swiper-recommended', {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                });
            } else {
                var swiper_recommended = new Swiper('.swiper-recommended', {
                    slidesPerView: 4,
                    spaceBetween: 20,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                });
            }

        })
    </script>
</body>

</html>