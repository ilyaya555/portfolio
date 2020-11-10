<?php
require "includes/config.php";
?>
<!DOCTYPE html>
<html lang="Ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Админка</title>
</head>

<body class="admin_body">
    <div class="upnav">
        <a class="upnav_item" href="http://newhide.ru/admin.php">Главная</a>
        <a class="upnav_item">Услуги</a>
        <a class="upnav_item" href="http://newhide.ru/posts.php">Посты</a>
        <a class="upnav_item">Портфолио</a>
        <a class="upnav_item">Достижения</a>

    </div>

    <section class="section_add">
        <div class="add_article">
            <form id="sendpost" method="POST">

                <div class="item_input">
                    <p class="item_add_article_p">Название поста</p><input id="title" class="add_article_input" type="text" name="title">
                </div>
                <div class="item_input">
                    <p class="item_add_article_p">Текст поста</p><textarea class="add_article_input text_area_article_text" type="text" name="article_text" placeholder="Текст материала"></textarea>
                </div>
                <div class="item_input">
                    <p class="item_add_article_p">Категория поста</p><input class="add_article_input" type="text" name="article_category" placeholder="Категория материала">
                </div>
                <div class="item_input">
                    <p class="item_add_article_p">Картинка поста</p><label class="add_article_input_btn2">Выбрать картинку<input type="file" name="image" style="visibility: hidden;" placeholder="Изображение материала" /></label>
                </div>
                <div class="item_input">
                    <p class="item_add_article_p ">Опубликовать пост</p><input class="add_article_input_btn" type="submit" name="submit" value="Опубликовать">
                </div>
            </form>


        </div>
        <div class="right_sidebar_admin">
            <?php

            if (isset($_POST['title'])) {
                $title = $_POST['title'];
                $article_text = $_POST['article_text'];
                $image = $_POST['image'];
                if (empty($title)) {
                    echo "Запись не добавлена";
                    exit();
                } else {

                    echo " Запись добавлена <br> Название $title";

                    $query = mysqli_query($connection, "INSERT INTO `articles` (`title`, `text`, `image`) VALUES ('$title','$article_text', '$image')");
                    if (empty($query)) {
                        echo "Неудачно";
                        exit();
                    }
                }
            }

            ?>


        </div>

    </section>
    <script src="/assets/animation3.js"></script>
</body>

</html>