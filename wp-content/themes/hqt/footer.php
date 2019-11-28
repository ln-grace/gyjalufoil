<footer>
    <div class="w">
        <div class="top">
            <div class="logo">
                <a href="/"><img src="<?php the_field('logofoot', 35); ?>" alt="foot logo"></a>
            </div>
            <div class="nav">
                <?php if ( has_nav_menu( 'footer' ) ) : ?>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer',
                            'menu_class'     => '',
                            'items_wrap'     => '<ul id="footnav" class="%2$s">%3$s</ul>',
                        )
                    );
                    ?>
                    <!-- #site-navigation -->
                <?php endif; ?>
            </div>
            <div class="icons">
                <a target="_blank" title="Facebook" href="<?php the_field('facebook', 35); ?>"><img src="/lib/img/index/facebook.svg" alt=""></a>
                <a target="_blank" title="Whatsapp" href="<?php the_field('twitter', 35); ?>"><img src="/lib/img/index/whatsapp.svg" alt=""></a>
                <a target="_blank" title="Linkedin" href="<?php the_field('linkedin', 35); ?>"><img src="/lib/img/index/in.svg" alt=""></a>
                <a target="_blank" title="Youtube" href="<?php the_field('youtube', 35); ?>"><img src="/lib/img/index/youtube.svg" alt=""></a>
            </div>
        </div>
        <div class="bottom">
            <p><?php the_field('copyright', 35); ?></p>
            <div class="sitemap">
                <a href="/sitemap.html" target="_blank">Html Sitemap</a>
                <div class="line"></div>
                <a href="/sitemap.xml" target="_blank">Sitemap</a>
            </div>
        </div>
    </div>
</footer>
<div id="alert"></div>
<script type="text/javascript" charset="utf-8">
    ;(function (W, D) {
        W.ec_corpid = '12647031';
        W.ec_cskey = 'JX2UtfAtsjxHrEUVMW';
        W.ec_scheme = '0';
        var s = D.createElement('script');
        s.charset = 'utf-8';
        s.src = '//1.staticec.com/kf/sdk/js/ec_cs.js';
        D.getElementsByTagName('head')[0].appendChild(s);
    })(window, document);
</script>
<script src="/lib/plugin/jquery-1.12.4/jquery-1.12.4.js"></script>
<script src="/lib/plugin/swiper/js/swiper.min.js"></script>
<script src="/lib/js/common.js"></script>