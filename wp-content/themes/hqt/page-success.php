<?php get_header();?>
    <style>
        main.success {
            padding: 40px 0;
        }

        main.success .container {
            text-align: center;
            color: #393e4b;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        main.success .container h3 {
            font-size: 30px;
            margin: 20px 0;
        }

        main.success .container .btn {
            width: 140px;
            height: 42px;
            color: #fff;
            background-color: #b51c21;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        main.success .container .btn img {
            margin-right: 4px;
        }
    </style>
    <main class="success">
        <div class="container">
            <div class="icon-success">
                <img src="/lib/img/index/success.svg" alt="">
            </div>
            <h3>Form submission succeeded</h3>
            <a href="/" class="btn">
                <img src="/lib/img/index/home.svg" alt="">
                <span>Homepage</span>
            </a>
        </div>
    </main>
<?php get_footer();?>