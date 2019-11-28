
<?php
get_header();
?>

<main class="case-detail">
    <div class="title">
        <h2><?php the_title(); ?></h2>
        <p><?php the_field('biaoqian'); ?> <?php the_time('Y.m.d'); ?></p>
    </div>
    <div class="container">
        <div class="w">
            <div class="swiper">
                <!-- Swiper -->
                <div class="swiper-container swiper-case-detail">
                    <div class="swiper-wrapper">
<!--                        <div class="swiper-slide">-->
<!--                            <img src="/lib/img/case/case_img_1.jpg" alt="">-->
<!--                        </div>-->

                        <?php
                        //Get the images ids from the post_metadata
                        $images = acf_photo_gallery('imgs', $post->ID);
                        //Check if return array has anything in it
                        if( count($images) ):
                            //Cool, we got some data so now let's loop over it
                            foreach($images as $image):
                                $id = $image['id']; // The attachment id of the media
                                $title = $image['title']; //The title
                                $caption= $image['caption']; //The caption
                                $full_image_url= $image['full_image_url']; //Full size image url
                                //$full_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160); //Resized size to 262px width by 160px height image url
                                $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
                                $url= $image['url']; //Goto any link when clicked
                                $target= $image['target']; //Open normal or new tab
                                $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
                                $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
                                ?>
                                    <div class="swiper-slide">
                                        <?php if( !empty($url) ){ ?><?php } ?>
                                            <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
                                            <?php if( !empty($url) ){ ?><?php } ?>
                                    </div>
                            <?php endforeach; endif; ?>
                    </div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
                <?php //previous_post_link('%link') ?> <?php //next_post_link('%link') ?>
            <?php else : ?>
                No cases
            <?php endif; ?>

            <div class="bottom">
                <a rel="nofollow" class="btn" href="/contact">Contact Us</a>
                <p>or send an email to <a rel="nofollow" href="mailto:sales@name.com">sales@name.com</a></p>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="w">
            <h2>Related Case</h2>
            <div class="box">
                <div class="item">
                    <div class="img-box">
                        <img src="/lib/img/index/img_6.jpg" alt="">
                        <div class="shadow">
                            <a href="#">More</a>
                        </div>
                    </div>
                    <div class="text">
                        <span>INFANT</span>
                        <p>Ace Mother and Baby Experience Hall</p>
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="/lib/img/index/img_7.jpg" alt="">
                        <div class="shadow">
                            <a href="#">More</a>
                        </div>
                    </div>
                    <div class="text">
                        <span>shopping center</span>
                        <p>EAF International Direct Collection Cashier</p>
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="/lib/img/index/img_8.jpg" alt="">
                        <div class="shadow">
                            <a href="#">More</a>
                        </div>
                    </div>
                    <div class="text">
                        <span>express</span>
                        <p>Express Guiyang District Logistics Center</p>
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="/lib/img/index/img_9.jpg" alt="">
                        <div class="shadow">
                            <a href="#">More</a>
                        </div>
                    </div>
                    <div class="text">
                        <span>Convenience</span>
                        <p>Member supermarket</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<?php get_footer();?>

<script>
    $(function () {
        var swiper_case_detail = new Swiper('.swiper-case-detail', {
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    })
</script>
</body>
</html>
