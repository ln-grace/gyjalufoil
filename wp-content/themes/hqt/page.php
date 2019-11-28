
    <?php get_header(); ?>


    <main class="news">
        <div class="w">
            <?php if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb('<div class="breadcrumbs">','</div>');
            } ?>
            <div class="details">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="title">
                            <h3><?php the_title(); ?></h3>
                        </div>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                        <div class="capability">
                            <div class="row">
                                <div class="item">
                                    <img src="/lib/img/about/Capability_1.jpg" alt="">
                                    <div class="title">
                                        <b>Dust-free Aluminium Foil Mill</b>
                                    </div>
                                    <div class="describe">
                                        To ensure the cleaness of aluminium foil surface, all aluminium foil mills are dust-free and equipped with mosquitoes killer lamps, and most of machines and facilities are covered by transparent materials.
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="/lib/img/about/Capability_2.jpg" alt="">
                                    <div class="title">
                                        <b>Hot Rolling Mill</b>
                                    </div>
                                    <div class="describe">
                                        The factories possess hot-rolling production lines, can produce and supply themselves 1235, 8079, 8011 and other alloys of hot rolling aluminium foil stock.
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="/lib/img/about/Capability_3.jpg" alt="">
                                    <div class="title">
                                        <b>Dust-free Aluminium Foil Mill</b>
                                    </div>
                                    <div class="describe">
                                        To ensure the cleaness of aluminium foil surface, all aluminium foil mills are dust-free and equipped with mosquitoes killer lamps, and most of machines and facilities are covered by transparent materials.
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="/lib/img/about/Capability_4.jpg" alt="">
                                    <div class="title">
                                        <b>Cold Rolling Mills</b>
                                    </div>
                                    <div class="describe">
                                        The manufacturers have several cold rolling production lines, can produce and supply themselves 1235, 8079, 8011 and other alloys of cold rolling aluminium foil stock.
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="/lib/img/about/Capability_5.jpg" alt="">
                                    <div class="title">
                                        <b>KAMPF Aluminium Foil Slitter and Rewinder</b>
                                    </div>
                                    <div class="describe">
                                        Several KAMPF aluminium foil slitters and rewinders imported for slitting aluminium foil into the required widths. The narrowest width is 120mm.
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="/lib/img/about/Capability_6.jpg" alt="">
                                    <div class="title">
                                        <b>Warehouse</b>
                                    </div>
                                    <div class="describe">
                                        Warehouse covering area of 10,000 m2 can store finished aluminium foil and aluminium coil at the same time.
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>

                <?php else : ?>
                    no product!
                <?php endif; ?>

            </div>
        </div>
    </main>
    <?php get_footer(); ?>
</body>

</html>