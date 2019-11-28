
<?php get_header(); ?>

<main class="contact">
    <div class="banner"></div>
    <div class="find-us">
        <div class="title">
            <h2>FIND US</h2>
        </div>
        <div class="container">
            <div class="w">
                <div class="item">
                    <img src="/lib/img/faq/contact_icon_call.png" alt="">
                    <strong>Call Us</strong>
                    <p><?php if( get_field('tel02', 35) ): ?>
                            Phone: <?php the_field('tel02', 35); ?>
                        <?php endif; ?></p>
                    <p><?php if( get_field('zuoji', 35) ): ?>
                            Tel: <?php the_field('zuoji', 35); ?>
                        <?php endif; ?></p>
                    <p><?php if( get_field('zuoji02', 35) ): ?>
                            Fax: <?php the_field('zuoji02', 35); ?>
                        <?php endif; ?></p>
                    <p><?php if( get_field('skype', 35) ): ?>
                            WhatsApp/Skype: <?php the_field('skype', 35); ?>
                        <?php endif; ?></p>
                </div>
                <div class="item" style="border-left: 1px solid #ecf0f1;border-right: 1px solid #ecf0f1;">
                    <img src="/lib/img/faq/contact_icon_email.png" alt="">
                    <strong>Say Hello</strong>
                    <p><?php the_field('email02', 35); ?></p>
                    <p><?php the_field('email', 35); ?></p>
                </div>
                <div class="item"  style="margin-bottom: 0;" >
                    <img src="/lib/img/faq/contact_icon_add.png" alt="">
                    <strong>Address</strong>
                    <p><?php the_field('address', 35); ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="leave-message">
        <div class="title">
            <h2>LEAVE A MESSAGE</h2>
        </div>
        <div class="container">
            <div class="w">
                <form action="/success" class="form" method="post">
                    <div style="display: none;">
                        <input type="hidden" name="_wpcf7" value="143">
                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f143-o1">
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
                    <div class="form-box" style="width: 100%;">
                        <label for="">YOUR MESSAGE</label>
                        <textarea name="your-subject" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-box" style="width: 100%;">
                        <input type="submit" value="Send Message" id="submit">
                    </div>
                </form>
                <?php //echo do_shortcode('[contact-form-7 id="143"]'); ?>
            </div>
        </div>
        <div class="empty"></div>
    </div>
</main>

<?php get_footer(); ?>

<script>
    $(function () {


    })
</script>
</body>
</html>