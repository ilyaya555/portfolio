<div class="content_news_someone">
    <div class="last_news_sidebar">Самые популярные</div>
    <?php
    $articles = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `views` DESC LIMIT 5 ");
    ?>

    <?php
    while ($art = mysqli_fetch_assoc($articles)) {
    ?>
        <div class="news_img_wrap">
            <a href="/article.php?id=<?php echo $art['id']; ?>"><img class="news_img" src="/assets/images/blog/<?php echo $art['image']; ?>"></a>
            <div class="news_img_text">
                <div class="textnews">
                    <a href="/article.php?id=<?php echo $art['id']; ?>">
                        <h3 class="textnews_item_sidebar_title"><?php echo $art['title']; ?></h3>
                    </a>
                    <p class="textnews_item_sidebar">Опубликовано: <?php echo date("d.m.Y", strtotime($art['pubdate'])) ?></p>
                    <i class="textnews_item_sidebar far fa-eye"></i><?php echo $art['views']; ?>
                </div>
            </div>
        </div>

        <p class="pretext_sidebar"><?php echo mb_substr($art['text'], 0, 80, 'utf-8'); ?>...</p>

    <?php
    }
    ?>
</div>