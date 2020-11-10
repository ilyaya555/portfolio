<?php
require "includes/config.php";
?>


<!DOCTYPE html>
<html lang="Ru">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/assets/images/owl_carousel/libs/owl_carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/images/owl_carousel/libs/owl_carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Работа</title>

    <script src="https://kit.fontawesome.com/6c63b73104.js" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
</head>

<body>

    <header class="header menu">
        <div class="container">
            <div class="header_inner">
                <div class="header_logo"><a href="http://newhide.ru/">HIDE</a></div>
                <nav class="nav">
                    <a class="nav_link" href="#">О нас</a>
                    <a class="nav_link" href="#">Портфолио</a>
                    <a class="nav_link" href="#">Цены</a>
                    <a class="nav_link" href="#">Блог</a>
                    <a class="nav_link" href="#">Контакты</a>
                </nav>
            </div>
        </div>
    </header>

    <!--Slider-->

    <?php include "slider.php"; ?>
    <!--Конец слайдера-->

    <section class="portfolio_info">
        <div class="container">
            <div class="title_port _anim-items">
                <h3 class="anim_down">Доработка сайта Reflex-m</h3>
                <p class="subtitle_port anim_down">Доработка сайта, интеграция с 1С, frontend - backend разработка</p>
                <img class="anim_down" src="/assets/images/portfolio/slider/slide1.png" alt="">
            </div>
        </div>
    </section>
    <section class="full_tasks">
        <div class="container">
            <div class="title_port _anim-items">
                <h3 class="anim_down">Задачи</h3>
            </div>


        </div>
        <div class="tasks _anim-items">
            <p class="anim_down"> У компании Reflex-m уже был сайт, разработанный другой веб-студией, но им требовалось доработать его: настроить интеграцию с 1С УТ, сделать возможность скачивания прайс листа продукции компании, с актуальными на данный момент времени товарными остатками. Произвести доработки внешнего вида сайта, настроить отображение 2-ух видов цен на сайте. </p>
        </div>
    </section>
    <!--Что мы сделали-->
    <section>
        <div class="imgdevelopment _anim-items">
            <img class="_anim-items" src="/assets/video/12312.gif" alt="" />
        </div>
    </section>
    <!--Перечисление того что сделали-->
    <section class="whatdoing">
        <div class="container">
            <div class="title_port _anim-items">
                <h3 class="anim_down">Решение</h3>
            </div>
        </div>
        <div class="whatwedoing _anim-items">
            <div class="itemdoing _anim-items">
                <h3 class="anim_down">1. В главное меню сайта мы добавили 2 новых пункта, "прайс мормышки" и "прайс поплавки".</h3>
            </div>
            <div class="itemdoing _anim-items">
                <h3 class="anim_down">2. Далее настроили обмен сайта с 1С УТ. Установили и настроили модуль для сайта, который генерировал прайс из тех товарных позиций, которые попадали на сайт в результате обмена с 1С.</h3>
            </div>
            <div class="itemdoing _anim-items">
                <h3 class="anim_down">3. После того как все было готово, нам осталось лишь настроить автоматическую генерацию прайс листа при помощи Cron - планировщика заданий на хостинге, на котором находился сайт клиента.</h3>
            </div>
        </div>
        <div class="_anim-items _anim-items">
            <img class="img_doing anim_down" src="/assets/images/portfolio/slider/slide2.png" alt="">
        </div>

    </section>
    <!--Result-->
    <section>
        <div class="container">
            <div class="title_port _anim-items">
                <h3 class="anim_down">Результат</h3>
                <img class="anim_down" src="/assets/images/portfolio/slider/slide1.png" alt="">

            </div>
            <div class="result_work">
                <div class="itemdoing _anim-items">
                    <h3 class="result_item anim_down">1. В главное меню сайта мы добавили 2 новых пункта, "прайс мормышки" и "прайс поплавки".</h3>
                </div>
                <div class=" itemdoing _anim-items">
                    <h3 class="result_item anim_down_1_7">1. В главное меню сайта мы добавили 2 новых пункта, "прайс мормышки" и "прайс поплавки".</h3>
                </div>
                <div class="itemdoing _anim-items">
                    <h3 class="result_item anim_down_2_7">1. В главное меню сайта мы добавили 2 новых пункта, "прайс мормышки" и "прайс поплавки".</h3>
                </div>
            </div>
        </div>

    </section>



    <!--Мои клиенты-->
    <section class="clients">
        <div class="title_thnks">
            <h3>Также с нами работали</h3>
        </div>
        <div class="owl-carousel">

            <div> <img src="/assets/images/owl_carousel/clients/client1.png" alt=""> </div>

            <div> <img src="/assets/images/owl_carousel/clients/client2.png" alt=""> </div>
            <div> <img src="/assets/images/owl_carousel/clients/client3.png" alt=""> </div>
            <div><img src="/assets/images/owl_carousel/clients/client4.png" alt=""> </div>
            <div> <img src="/assets/images/owl_carousel/clients/client5.png" alt=""> </div>

        </div>

    </section>






    <!--Футер сайта-->
    <?php include "footer.php"; ?>

    <script src="assets/images/owl_carousel/libs/owl_carousel/owl.carousel.min.js"></script>
    <script src="/assets/animation2.js"></script>
    <script src="/assets/animation.js"></script>


</body>

</html>