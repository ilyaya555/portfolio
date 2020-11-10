<?php
require "includes/config.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Статья</title>
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
            $article = mysqli_query($connection, "SELECT  * FROM `articles` WHERE `id` =" . (int) $_GET['id']);

            if (mysqli_num_rows($article) <= 0) {
            ?>
                <h3>Статья не найдена</h3>
            <?php
            } else {
                $art = mysqli_fetch_assoc($article);
                mysqli_query($connection, "UPDATE `articles` SET `views` = `views`+1 WHERE `id` =" . (int) $_GET['id']);

            ?>
                <div class="content_news">
                    <div class="news_img_wrap">
                        <img class="news_img" src="/assets/images/blog/<?php echo $art['image']; ?>">
                        <div class="news_img_text">
                            <div class="textnews">
                                <h3 class="title_detal_news"><?php echo $art['title']; ?></h3>
                                <p class="detals_news_item">Опубликовано: <?php echo date("d.m.Y", strtotime($art['pubdate'])) ?></p>
                                <a class="detals_news_item views"><i class=" far fa-eye"></i><?php echo $art['views']; ?></a>

                            </div>
                        </div>
                    </div>


                    <p class="detal_textnews"><?php echo $art['text']; ?></p>

                </div>


            <?php
            }
            ?>
            <?php include "includes/sidebar.php"; ?>
        </div>

    </div>
    <!--Футер сайта-->
    <?php include "footer.php"; ?>
</body>

</html>