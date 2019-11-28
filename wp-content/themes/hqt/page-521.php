
    <?php get_header(); ?>


    <main class="news">
        <div class="banner"></div>
        <div class="w">
            <?php if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<div class="breadcrumbs">', '</div>');
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
                                        <b>Achenbach Rolling Machine</b>
                                    </div>
                                    <div class="describe">
                                        Three sets of Achenbach automatic high-speed and wide-width foil rolling machines, the thinnest gauge of finished foil is 5 microns, the maximum width is 1900mm.
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="/lib/img/about/Capability_2.jpg" alt="">
                                    <div class="title">
                                        <b>Hot Rolling Mills</b>
                                    </div>
                                    <div class="describe">
                                        The hot-rolling production lines can produce and supply 1235, 8079, 8011 and other alloys of hot rolling aluminum foil stock.
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="/lib/img/about/Capability_3.jpg" alt="">
                                    <div class="title">
                                        <b>Dust Free Workshop</b>
                                    </div>
                                    <div class="describe">
                                        To ensure the cleanness of aluminum foil surfaces, all aluminum foil mills are dust-free and equipped with mosquitoes killer lamps and most of the machines and facilities are covered with transparent materials.
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="/lib/img/about/Capability_4.jpg" alt="">
                                    <div class="title">
                                        <b>Cold Rolling Mills</b>
                                    </div>
                                    <div class="describe">
                                        Cold rolling mills can produce 1235, 1145, 8079, 8011, 8021 and other alloys of cold rolling aluminum foil stock.
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="/lib/img/about/Capability_5.jpg" alt="">
                                    <div class="title">
                                        <b>KAMPF Cutting Machine</b>
                                    </div>
                                    <div class="describe">
                                        Three sets of KAMPF aluminum foil cutting machines, the width of the finished foil is from 150mm to 1980mm.
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="/lib/img/about/Capability_6.jpg" alt="">
                                    <div class="title">
                                        <b>Warehouse</b>
                                    </div>
                                    <div class="describe">
                                        Warehouse covering an area of 10,000 m² can store finished aluminum foil and aluminum coil at the same time.
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