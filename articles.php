<?php
require "includes/config.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Все статьи</title>
    <script src="https://kit.fontawesome.com/6c63b73104.js" crossorigin="anonymous"></script>
</head>

<body class="articles_body">
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
                    </nav>
                </div>
            </div>
        </header>


        <div class="container content">

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

    <!--Футер сайта-->
    <?php include "footer.php"; ?>
</body>

</html>