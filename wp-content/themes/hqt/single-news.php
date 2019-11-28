<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="/lib/plugin/swiper/css/swiper.css">
    <link rel="stylesheet" href="/lib/css/style.css">
    <style>
        .ssbp-wrap>div {
            margin-top: 5px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .ssbp-wrap>div a {
            margin-right: 5px;
        }

        .ssbp-wrap>div a img {
            width: 32px !important;
        }

        .ssbp-wrap .ssbp-text {
            display: none;
        }
    </style>
</head>

<body>
    <?php
    get_header();
    ?>

    <main class="product-detail">
        <div class="product-details">
            <div class="news-detail">
                <div class="w">
                    <?php if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<div class="breadcrumbs">', '</div>');
                    } ?>
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="title">
                                <h3><?php the_title(); ?></h3>
                                <div>Port: <?php the_time('Y-m-d'); ?></div>
                            </div>
                            <hr>
                            <div class="container">
                                <?php the_content(); ?>
                                <?php echo do_shortcode('[ssba-buttons]'); ?>
                            <?php endwhile; ?>
                            <p class="vertical"><span>prev: <?php previous_post_link('%link') ?></span> <span>next: <?php next_post_link('%link') ?></span></p>
                            </div>
                        <?php else : ?>
                            no article!
                        <?php endif; ?>
                </div>
            </div>

            <!-- contact us start -->
            <div class="contact-us" id="contact-us">
                <div class="w">
                    <h2>Inquiry</h2>
                </div>
                <div class="container">
                    <div class="w">
                        <?php //echo do_shortcode('[contact-form-7 id="6"]'); 
                        ?>
                        <form action="#wpcf7-f6-o1" class="form" method="post">
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
        </div>
    </main>

    <?php get_footer(); ?>

    <script>
        $(function() {
            var galleryThumbs = new Swiper('.gallery-thumbs', {
                spaceBetween: 20,
                slidesPerView: 5,
                freeMode: true,
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
            });
            var galleryTop = new Swiper('.gallery-top', {
                spaceBetween: 20,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                thumbs: {
                    swiper: galleryThumbs
                }
            });

            $('#tabs .tabs-btn a').on('click', function() {

                $(this).addClass('active').siblings().removeClass('active')
                $($(this).data('box-id')).fadeIn().siblings().hide()
            })
        })
    </script>
</body>

</html>