<?php
get_header();
?>
<style>
    main.product-detail .product-details {
        margin-top: 20px;
    }
</style>
<main class="product-detail">

    <div class="product-header">
        <?php if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<div class="w"><div class="breadcrumbs">', '</div></div>');
        } ?>
        <div class="w">
            <div class="img-box">
                <!-- Swiper -->
                <div class="swiper-container gallery-top">
                    <div class="swiper-wrapper">

                        <?php
                        $images = acf_photo_gallery('images', $post->ID);
                        if (count($images)) :
                            foreach ($images as $image) :
                                $id = $image['id']; // The attachment id of the media
                                $title = $image['title']; //The title
                                $caption = $image['caption']; //The caption
                                $full_image_url = $image['full_image_url']; //Full size image url
                                //$full_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160); //Resized size to 262px width by 160px height image url
                                $thumbnail_image_url = $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
                                $url = $image['url']; //Goto any link when clicked
                                $target = $image['target']; //Open normal or new tab
                                $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
                                $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
                                ?>
                                <div class="swiper-slide">
                                    <?php if (!empty($url)) { ?><?php } ?>
                                    <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
                                    <?php if (!empty($url)) { ?><?php } ?>
                                </div>
                        <?php endforeach;
                        endif; ?>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="swiper-container gallery-thumbs">
                    <div class="swiper-wrapper">

                        <?php
                        $images = acf_photo_gallery('images', $post->ID);
                        if (count($images)) :
                            foreach ($images as $image) :
                                $id = $image['id'];
                                $title = $image['title'];
                                $caption = $image['caption'];
                                $full_image_url = $image['full_image_url'];
                                $full_image_url = acf_photo_gallery_resize_image($full_image_url, 96, 96);
                                $thumbnail_image_url = $image['thumbnail_image_url'];
                                $url = $image['url'];
                                $target = $image['target'];
                                $alt = get_field('photo_gallery_alt', $id);
                                $class = get_field('photo_gallery_class', $id);
                                ?>
                                <div class="swiper-slide" style="width: 96px !important;">
                                    <?php if (!empty($url)) { ?><?php } ?>
                                    <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
                                    <?php if (!empty($url)) { ?><?php } ?>
                                </div>
                        <?php endforeach;
                        endif; ?>
                    </div>
                </div>
            </div>
            <div class="text">
                <!--                <div class="category">--><?php //the_category();
                                                                ?>
                <!--</div>-->
                <h2><?php the_title(); ?></h2>
                <div class="params">
                    <ul>
                        <li><?php the_field('jyjs'); ?></li>
                    </ul>
                </div>
                <!-- <div class="stock"><img src="/lib/img/products/产品详情_icon_car.png" alt=""> Due in stock (estimated):
                    10-11 weeks</div> -->
                <div class="inquiry">
                    <a href="#contact-us"><img src="/lib/img/products/产品详情_icon_inquiry.png" alt="inquiry"> Inquiry</a>
                </div>
            </div>
        </div>
    </div>
    <div class="product-details">
        <div id="tabs">
            <div class="tabs-btn">
                <div class="w">
                    <a data-box-id="#features" class="active" href="javascript:">Features</a>
                    <a data-box-id="#specifications" href="javascript:">Specifications</a>
                    <a data-box-id="#delivery" href="javascript:">Flow Chart</a>
                </div>
            </div>
            <div class="tabs-container">
                <div class="w">
                    <div id="features" class="item">
                        <div class="intro">
                            <?php the_field('Features'); ?>
                        </div>
                        <div class="params">
                            <ul>
                                <!--                                <li>Measures 36" W x 14" D x 54" H</li>                                -->
                            </ul>
                        </div>
                    </div>
                    <div id="specifications" class="item">
                        <?php the_field('specifications'); ?>
                    </div>
                    <div id="delivery" class="item">
                        <?php if (get_field('delivery')) : ?>
                            <a href="<?php the_field('delivery'); ?>" target="_blank"><img src="<?php the_field('delivery'); ?>" />
                            <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- 相关产品 -->
        <div class="related-products">
            <div class="w">
                <h2>Related Products</h2>
                <div class="container">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'showposts' => 4,
                        'orderby' => 'rand',
                        'cat' => array(-36, -37, -38),
                        'post__not_in' => get_option('sticky_posts'),
                    );
                    $my_query = new WP_Query($args);
                    if ($my_query->have_posts()) {
                        while ($my_query->have_posts()) : $my_query->the_post(); ?>
                            <div class="item">
                                <a href="<?php the_permalink(); ?>" class="box">
                                    <?php the_post_thumbnail(array(285, 360)); ?>
                                    <div class="text">
                                        <strong><?php the_title(); ?></strong>
                                        <!--                                        <span>--><?php //the_field('caizhi'); 
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


                    <form action="/success" class="form" method="post">
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