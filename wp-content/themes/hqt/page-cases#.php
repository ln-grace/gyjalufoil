<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="/lib/plugin/swiper/css/swiper.css">
    <link rel="stylesheet" href="/lib/css/style.css">
</head>

<body>

<?php get_header(); ?>

<main class="case">

    <div class="banner"></div>

    <div class="w">

        <div class="btn">

            <a data-box-id="#case" class="active" href="#">Case</a>

            <a data-box-id="#sloution" href="#">Sloution</a>

        </div>

        <div class="container">

            <div id="case">

                <div class="case-box">

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

                    <div class="item">

                        <div class="img-box">

                            <img src="/lib/img/index/img_10.jpg" alt="">

                            <div class="shadow">

                                <a href="#">More</a>

                            </div>

                        </div>

                        <div class="text">

                            <span>express</span>

                            <p>Cainiao Union</p>

                        </div>

                    </div>

                    <div class="item">

                        <div class="img-box">

                            <img src="/lib/img/index/img_11.jpg" alt="">

                            <div class="shadow">

                                <a href="#">More</a>

                            </div>

                        </div>

                        <div class="text">

                            <span>express</span>

                            <p>Express Guiyang District Logistics Center</p>

                        </div>

                    </div>

                </div>

            </div>

            <div id="sloution">

                <div class="sloution-box">

                    <div class="item">

                        <img src="/lib/img/case/sloution_1.jpg" alt="">

                        <strong>Logistics series</strong>

                        <ul>

                            <li>Measures 36" W x 14" D x 54" H</li>

                            <li>Great for the office, garage, kitchen, and more</li>

                            <li>Each shelf holds up to 350 pounds</li>

                            <li>Adjustable leveling feet</li>

                            <li>Durable and stylish black-coated chrome steel construction</li>

                        </ul>

                        <a href="#">from $599.00
                            <div class="hover">contact us</div>
                        </a>

                    </div>

                    <div class="item">

                        <img src="/lib/img/case/sloution_2.jpg" alt="">

                        <strong>Logistics series</strong>

                        <ul>

                            <li>Measures 36" W x 14" D x 54" H</li>

                            <li>Great for the office, garage, kitchen, and more</li>

                            <li>Each shelf holds up to 350 pounds</li>

                            <li>Adjustable leveling feet</li>

                            <li>Durable and stylish black-coated chrome steel construction</li>

                        </ul>

                        <a href="#">from $699.00
                            <div class="hover">contact us</div>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</main>


<?php get_footer(); ?>

<script>

    $(function () {


        $('.btn a').on('click', function () {


            $(this).addClass('active').siblings().removeClass('active')

            $($(this).data('box-id')).fadeIn().siblings().hide()

        })


    })

</script>
</body>
</html>