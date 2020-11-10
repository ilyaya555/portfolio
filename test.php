<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <link rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Все статьи</title>
    <script src="https://kit.fontawesome.com/6c63b73104.js" crossorigin="anonymous"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-180539077-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-180539077-1');
    </script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(68299771, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/68299771" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
</head>

<body>
    <div class="articles_intro">
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
                        <a class="nav_link test_phone" href="tel:+74958875588">Телефон:+7(495)887-55-88</a>
                    </nav>
                </div>
            </div>
        </header>


        <div class="container content">
            <div class="test_phone">
                <a class="test_phone" href="tel:+74958875588">Наш телефон:+7(495)887-55-88 </a>
            </div>

            <?php
            $per_page = 5;
            $page = 1;

            if (isset($_GET['page'])) {
                $page = (int) $_GET['page'];
            }

            $total_count_q = mysqli_query($connection, "SELECT COUNT(`id`) AS `total_count` FROM `articles`");
            $total_count = mysqli_fetch_assoc($total_count_q);
            $total_count = $total_count['total_count'];

            $total_pages = ceil($total_count / $per_page);
            if ($page <= 1 || $page > $total_pages) {

                $page = 1;
            }

            $offset = ($per_page * $page) - $per_page;

            $articles = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `id` DESC LIMIT $offset,$per_page");
            $articles_exist = true;
            if (mysqli_num_rows($articles) <= 0) {
                echo 'Статей нет!';
                $articles_exist = false;
            }
            while ($art = mysqli_fetch_assoc($articles)) {
            ?>
                <div class="all_news_item">

                    <div class="all_news_item_img">
                        <a href="/article.php?id=<?php echo $art['id']; ?>"><img class="all_news_img" src="/assets/images/blog/<?php echo $art['image']; ?>"></a>
                    </div>
                    <div class="detals">
                        <a href="/article.php?id=<?php echo $art['id']; ?>">
                            <h3><?php echo $art['title']; ?></h3>
                        </a>
                        <div class="meta_news">
                            <p class="pubdate_meta_news">Опубликовано: <?php echo date("d.m.Y", strtotime($art['pubdate'])) ?></p>
                            <a class="views_meta_news"><i class=" far fa-eye"></i><?php echo $art['views']; ?></a>
                        </div>

                        <p><?php echo mb_substr($art['text'], 0, 80, 'utf-8'); ?>...</p>

                        <div class="actions">
                            <a class="btn_nwes_more" href="/article.php?id=<?php echo $art['id']; ?>"> Подробнее</a>

                        </div>
                    </div>
                </div>




            <?php
            }
            ?>


            <?php
            if ($articles_exist == true) {
                echo '<div class="paginator">';
                if ($page > 1) {
                    echo '<a class = "btn_nwes_more" href="/articles.php?page=' . ($page - 1) . '"> Назад</a>  ';
                }
                if ($page < $total_pages) {
                    echo '<a class = "btn_nwes_more" href="/articles.php?page=' . ($page + 1) . '">Вперед </a>  ';
                }
                echo '</div>';
            }
            ?>

            <?php include "includes/sidebar.php"; ?>

        </div>


    </div>

    <div class="container">
        <form class="newform">
            <p>Ваш телефон <input placeholder="Ваш телефон"></p>
            <input type="submit" class="subscribe_btn ">
        </form>

        <div>

            <!--Футер сайта-->
            <?php include "footer.php"; ?>
</body>





<script type="text/javascript">
    jQuery(document).on('submit', 'form', function() {
        var form = jQuery(this);
        var phone = form.find('input[placeholder="Ваш телефон"]').val();
        var sub = 'Заявка на звонок';

        var ct_node_id = '16';
        var ct_site_id = '40619';
        var ct_data = {
            phoneNumber: phone,
            requestUrl: location.href,
            subject: sub,
            sessionId: window.call_value
        };

        if (!!phone) {
            jQuery.ajax({
                url: 'https://api-node' + ct_node_id + '.calltouch.ru/calls-service/RestAPI/requests/' + ct_site_id + '/register/',
                dataType: 'json',
                type: 'POST',
                data: ct_data,
                async: false
            });
        }
    });
</script>


<!-- calltouch -->
<script type="text/javascript">
    (function(w, d, n, c) {
        w.CalltouchDataObject = n;
        w[n] = function() {
            w[n]["callbacks"].push(arguments)
        };
        if (!w[n]["callbacks"]) {
            w[n]["callbacks"] = []
        }
        w[n]["loaded"] = false;
        if (typeof c !== "object") {
            c = [c]
        }
        w[n]["counters"] = c;
        for (var i = 0; i < c.length; i += 1) {
            p(c[i])
        }

        function p(cId) {
            var a = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                i = function() {
                    a.parentNode.insertBefore(s, a)
                };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mod.calltouch.ru/init.js?id=" + cId;
            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", i, false)
            } else {
                i()
            }
        }
    })(window, document, "ct", "34ugzbrz");
</script>
<!-- calltouch -->

</html>