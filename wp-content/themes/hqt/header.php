<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5W76GJ5');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-151205331-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-151205331-1');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <meta name="google-site-verification" content="b-Ar0pN2aupL57-U0fS4E7fWpkciRKGkBql8Q4juvgc" />
    <link rel="shortcut icon" href="<?php the_field('icon', 35); ?>" type="image/x-icon">
    <link rel="stylesheet" href="/lib/plugin/swiper/css/swiper.css">
    <link rel="stylesheet" href="/lib/css/style.css">
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5W76GJ5" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="top">
        <span><img src="/lib/img/index/icon_call.png" alt="">Mobile/WhatsApp/Skype/Line：<?php the_field('tel02', 35); ?></span>
        <span><img src="/lib/img/index/icon_email.png" alt=""><a href="mailto:<?php the_field('email02', 35); ?>" class="gyj-link"><?php the_field('email02', 35); ?></a></span>
        <span class="language">
            <img src="/lib/img/index/icon_English.png" alt=""> EN <img src="/lib/img/index/down.svg" alt="">
            <ul>
                <li><a href="#">English</a></li>
            </ul>
        </span>
    </div>
    <div id="brick"></div>
    <header>
        <div class="logo">
            <a href="/"><img src="<?php the_field('logotop', 35); ?>" alt="logo"></a>
        </div>
        <div class="nav">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'container'        => '',
                    'menu_class'     => 'menu',
                    'items_wrap'     => '<ul id="navmenu" class="%2$s">%3$s</ul>',
                )
            );
            ?>
            <style>
                /*#navmenu button{display: none;}*/
                /*.nav .main-menu-more {display: none !important;}*/
            </style>
        </div>
        <div class="nav-mobile">
            <ul id="navmenu" class="menu">
                <li><a href="/">Home</a></li>
                <li><?php
                    $args = array(
                        'include' => '2',
                        'post_type' => 'page',
                        'post_status' => 'publish'
                    );
                    $pages = get_pages($args);
                    foreach ($pages as $post) : setup_postdata($post); ?>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <?php endforeach;
                    wp_reset_postdata();
                    ?>
                    <i class="arrow"><img class="arrow" src="/lib/img/products/triangle.svg" alt=""></i>
                    <ul class="sub-menu">
                        <li><?php
                            $args = array(
                                'include' => '673',
                                'post_type' => 'page',
                                'post_status' => 'publish'
                            );
                            $pages = get_pages($args);
                            foreach ($pages as $post) : setup_postdata($post); ?>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <?php endforeach;
                            wp_reset_postdata();
                            ?>
                        </li>
                    </ul>
                </li>
                <li><a href="/product">Products</a><i class="arrow"><img class="arrow" src="/lib/img/products/triangle.svg" alt=""></i>
                    <ul class="sub-menu">
                        <li><?php $cat_id = 17;
                            printf('<a href="%s">%s</a>', get_category_link($cat_id), get_the_category_by_ID($cat_id)); ?><img class="arrow" src="/lib/img/products/triangle.svg" alt=""></i>
                            <ul class="sub-menu">
                                <li><?php $cat_id = 20;
                                    printf('<a href="%s">%s</a>', get_category_link($cat_id), get_the_category_by_ID($cat_id)); ?></li>
                                <li><?php $cat_id = 18;
                                    printf('<a href="%s">%s</a>', get_category_link($cat_id), get_the_category_by_ID($cat_id)); ?></li>
                                <li><?php $cat_id = 21;
                                    printf('<a href="%s">%s</a>', get_category_link($cat_id), get_the_category_by_ID($cat_id)); ?></li>
                                <li><?php $cat_id = 24;
                                    printf('<a href="%s">%s</a>', get_category_link($cat_id), get_the_category_by_ID($cat_id)); ?></li>
                                <li><?php $cat_id = 19;
                                    printf('<a href="%s">%s</a>', get_category_link($cat_id), get_the_category_by_ID($cat_id)); ?></li>
                                <li><?php $cat_id = 23;
                                    printf('<a href="%s">%s</a>', get_category_link($cat_id), get_the_category_by_ID($cat_id)); ?></li>
                                <li><?php $cat_id = 22;
                                    printf('<a href="%s">%s</a>', get_category_link($cat_id), get_the_category_by_ID($cat_id)); ?></li>
                                <li><?php $cat_id = 25;
                                    printf('<a href="%s">%s</a>', get_category_link($cat_id), get_the_category_by_ID($cat_id)); ?></li>
                            </ul>
                        </li>
                        <li><?php $cat_id = 26;
                            printf('<a href="%s">%s</a>', get_category_link($cat_id), get_the_category_by_ID($cat_id)); ?><i class="arrow"><img class="arrow" src="/lib/img/products/triangle.svg" alt=""></i>
                            <ul class="sub-menu">
                                <li><?php $cat_id = 27;
                                    printf('<a href="%s">%s</a>', get_category_link($cat_id), get_the_category_by_ID($cat_id)); ?></li>
                                <li><?php $cat_id = 39;
                                    printf('<a href="%s">%s</a>', get_category_link($cat_id), get_the_category_by_ID($cat_id)); ?></li>
                            </ul>
                        </li>
                        <li><?php $cat_id = 28;
                            printf('<a href="%s">%s</a>', get_category_link($cat_id), get_the_category_by_ID($cat_id)); ?><i class="arrow"><img class="arrow" src="/lib/img/products/triangle.svg" alt=""></i>
                            <ul class="sub-menu">
                                <li><?php $cat_id = 29;
                                    printf('<a href="%s">%s</a>', get_category_link($cat_id), get_the_category_by_ID($cat_id)); ?></li>
                                <li><?php $cat_id = 32;
                                    printf('<a href="%s">%s</a>', get_category_link($cat_id), get_the_category_by_ID($cat_id)); ?></li>
                                <li><?php $cat_id = 30;
                                    printf('<a href="%s">%s</a>', get_category_link($cat_id), get_the_category_by_ID($cat_id)); ?></li>
                                <li><?php $cat_id = 31;
                                    printf('<a href="%s">%s</a>', get_category_link($cat_id), get_the_category_by_ID($cat_id)); ?></li>
                                <li><?php $cat_id = 33;
                                    printf('<a href="%s">%s</a>', get_category_link($cat_id), get_the_category_by_ID($cat_id)); ?></li>
                                <li><?php $cat_id = 40;
                                    printf('<a href="%s">%s</a>', get_category_link($cat_id), get_the_category_by_ID($cat_id)); ?></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><?php
                    $args = array(
                        'include' => '521',
                        'post_type' => 'page',
                        'post_status' => 'publish'
                    );
                    $pages = get_pages($args);
                    foreach ($pages as $post) : setup_postdata($post); ?>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <?php endforeach;
                    wp_reset_postdata();
                    ?></li>
                <li><?php $cat_id = 36;
                    printf('<a href="%s">%s</a>', get_category_link($cat_id), get_the_category_by_ID($cat_id)); ?><i class="arrow"><img class="arrow" src="/lib/img/products/triangle.svg" alt=""></i>
                    <ul class="sub-menu">
                        <li><?php $cat_id = 37;
                            printf('<a href="%s">%s</a>', get_category_link($cat_id), get_the_category_by_ID($cat_id)); ?></li>
                        <li><?php $cat_id = 38;
                            printf('<a href="%s">%s</a>', get_category_link($cat_id), get_the_category_by_ID($cat_id)); ?></li>
                    </ul>
                </li>
                <li><?php
                    $args = array(
                        'include' => '32',
                        'post_type' => 'page',
                        'post_status' => 'publish'
                    );
                    $pages = get_pages($args);
                    foreach ($pages as $post) : setup_postdata($post); ?>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <?php endforeach;
                    wp_reset_postdata();
                    ?></li>
            </ul>
        </div>
        <div id="nav-btn"></div>
    </header>