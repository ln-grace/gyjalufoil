<?php
/**
 * Template Name: 关于我们
 */
?>
<?php get_header(); ?>

<main class="about">
    <div class="banner"></div>
    <div class="our-company">
        <div class="w">
            <div class="title">
                <h2>Our Company</h2>
            </div>
            <div class="container">
                <div class="text">
                    <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <?php the_content();?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="img-box">
                    <div class="item">
                        <img src="/lib/img/about/img_1.jpg" alt="">
                        <strong>SHELF, DESINEY</strong>
                        <p>HIC DISPLAY always focus on customer's requirement. and help customers to promote their
                            products.</p>
                    </div>
                    <div class="item">
                        <img src="/lib/img/about/img_2.jpg" alt="">
                        <strong>A STRONG TEAM</strong>
                        <p>Our company possesses professional tachnical team.</p>
                    </div>
                    <div class="item">
                        <img src="/lib/img/about/img_3.jpg" alt="">
                        <strong>OUR FACTORY</strong>
                        <p>Multiple lines. 3.000 square meters of space to ensure your product quality and
                            production speed.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="case">
        <img src="/lib/img/about/img_storage.jpg" alt="">
        <img src="/lib/img/about/img_logist.jpg" alt="">
    </div>
    <div class="culture">
        <div class="title">
            <h2>Culture</h2>
        </div>
        <div class="container">
            <div class="w">
                <div class="item">
                    <div class="img-box">
                        <img src="/lib/img/about/icon_mission.png" alt="">
                    </div>
                    <strong>Our Goal</strong>
                    <p>Our goal is to provide one-stop bare aluminum foil materials solution for global customers, and persistently put our every effort to achieve this goal.</p>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="/lib/img/about/icon_vision.png" alt="">
                    </div>
                    <strong>Our Vision</strong>
                    <p>Our vision is to serve global customers to become a reliable and excellent supplier of aluminum foil. We are committed to exceeding customers’ expectations.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="contact">
        <div class="w">
<!--            <p>If you need a perfect aluminum foil materials solution please don't miss us.</p>-->
            <a href="/contact">Contact Us</a>
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