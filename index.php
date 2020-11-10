<?php
require "includes/config.php";
?>


<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet" />

  <title><?php echo $config['title']; ?></title>
  <script src="https://kit.fontawesome.com/6c63b73104.js" crossorigin="anonymous"></script>
  <script src="/assets/animation.js"></script>
</head>

<body>
  <!--Шапка сайта (первый экран)-->
  <header class="header">
    <div class="container">
      <div class="header_inner">
        <div class="header_logo">HIDE</div>
        <nav class="nav">
          <a class="nav_link" href="#">О нас</a>
          <a class="nav_link" href="#">Портфолио</a>
          <a class="nav_link" href="#">Цены</a>
          <a class="nav_link" href="http://newhide.ru/articles.php">Блог</a>
          <a class="nav_link" href="#">Контакты</a>
        </nav>
      </div>
    </div>
  </header>

  <div class="intro">
    <div class="container">
      <div class="intro_inner">
        <h2 class="intro_suptitle">Не добро пожаловать</h2>
        <h1 class="intro_title">HIDE - вебстудия</h1>
        <a class="btn" href="#">Начать работу</a>
      </div>
    </div>

    <div class="slider_header">
      <div class="container">
        <div class="slider_inner">
          <div class="slider_header_item active">
            <span class="slider_num">01</span> Знакомство
          </div>
          <div class="slider_header_item">
            <span class="slider_num">02</span> Погружение
          </div>
          <div class="slider_header_item">
            <span class="slider_num">03</span> Работа
          </div>
          <div class="slider_header_item">
            <span class="slider_num">04</span> Результат
          </div>
        </div>
      </div>
    </div>
  </div>


  <!--Чем мы занимаемся-->
  <section class="section">
    <div class="container">
      <div class="section_header">
        <h3 class="section_suptitle">Делаем лучше</h3>
        <h2 class="section_title">Вебстудия - HIDE</h2>

        <div class="section_text">
          <p>
            Наша вебстудия занимается разрботкой вебсайтов. Интеграциями с CRM. Рекламой Яндекс директ и т.д.
          </p>
        </div>
      </div>
      <div class="card">
        <div class="card_item">
          <div class="card_inner">
            <div class="card_img">
              <img src="/assets/images/01.jpg" alt="" />
            </div>
            <div class="card_text">Сайт 1</div>
          </div>
        </div>
        <div class="card_item">
          <div class="card_inner">
            <div class="card_img">
              <img src="/assets/images/02.jpg" alt="" />
            </div>
            <div class="card_text">Сайт 2</div>
          </div>
        </div>
        <div class="card_item">
          <div class="card_inner">
            <div class="card_img">
              <img src="/assets/images/03.jpg" alt="" />
            </div>
            <div class="card_text">Сайт 3</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Коротко - цифры-->
  <div class="statistic">
    <div class="container">
      <div class="stat">
        <div class="stat_item">
          <div class="stat_count">56</div>
          <div class="stat_text">Проектов</div>
        </div>
        <div class="stat_item">
          <div class="stat_count">12</div>
          <div class="stat_text">Сотрудников</div>
        </div>
        <div class="stat_item">
          <div class="stat_count">27</div>
          <div class="stat_text">Сертификатов</div>
        </div>
        <div class="stat_item">
          <div class="stat_count">11</div>
          <div class="stat_text">Наград</div>
        </div>
        <div class="stat_item">
          <div class="stat_count">5</div>
          <div class="stat_text">Побед</div>
        </div>
      </div>
    </div>
  </div>
  <!--Наши сертификаты награды и т.д.-->
  <section class="section">
    <div class="container">
      <div class="section_header">
        <h3 class="section_suptitle">Подтверждение наших навыков - сертификаты и благодарности </h3>
        <h2 class="section_title">Вебстудия - HIDE</h2>
      </div>

      <div class="services">
        <div class="services_item">
          <img class="services_icon" src="/assets/images/svg/icon1.svg" alt="" />
          <div class="services_title">Услуга 1</div>
          <div class="services_text">
            Какой то там текст Какой то там текст Какой то там текст Какой то
            там текст
          </div>
        </div>
        <div class="services_item">
          <img class="services_icon" src="/assets/images/svg/icon1.svg" alt="" />
          <div class="services_title">Услуга 2</div>
          <div class="services_text">
            Какой то там текст Какой то там текст Какой то там текст Какой то
            там текст
          </div>
        </div>
        <div class="services_item">
          <img class="services_icon" src="/assets/images/svg/icon1.svg" alt="" />
          <div class="services_title">Услуга 3</div>
          <div class="services_text">
            Какой то там текст Какой то там текст Какой то там текст Какой то
            там текст
          </div>
        </div>
      </div>

      <hr />

      <div class="services">
        <div class="services_item">
          <img class="services_icon" src="/assets/images/svg/icon1.svg" alt="" />
          <div class="services_title">Услуга 4</div>
          <div class="services_text">
            Какой то там текст Какой то там текст Какой то там текст Какой то
            там текст
          </div>
        </div>
        <div class="services_item">
          <img class="services_icon" src="/assets/images/svg/icon1.svg" alt="" />
          <div class="services_title">Услуга 5</div>
          <div class="services_text">
            Какой то там текст Какой то там текст Какой то там текст Какой то
            там текст
          </div>
        </div>
        <div class="services_item">
          <img class="services_icon" src="/assets/images/svg/icon1.svg" alt="" />
          <div class="services_title">Услуга 6</div>
          <div class="services_text">
            Какой то там текст Какой то там текст Какой то там текст Какой то
            там текст
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Какие технологии мы используем-->

  <section class="section section--devices">
    <div class="container">
      <div class="section_header">
        <h3 class="section_suptitle section_suptitle--suptitle">
          Стек технологий
        </h3>
        <h2 class="section_title section_title--title">Вебстудия - HIDE</h2>
      </div>
      <div class="devices">
        <img class="devices_item" src="/assets/images/imac.png" alt="" />
        <img class="devices_item devices_item--iphone" src="/assets/images/iphone.png" alt="" />
      </div>
    </div>
  </section>
  <!--Наша команда-->
  <section class="section">
    <div class="container">
      <div class="section_header">
        <h3 class="section_suptitle">Познакомьтесь с нами</h3>
        <h2 class="section_title">Наша команда</h2>

        <div class="section_text">
          <p>
            Мы такие то такие то Мы такие то такие тоМы такие то такие тоМы
            такие то такие тоМы такие то такие тоМы такие то такие то
          </p>
        </div>

        <div class="card">
          <div class="card_item">
            <div class="card_inner">
              <div class="card_img">
                <img src="/assets/images/Our_team2.jpg" alt="" />
              </div>
              <div class="card_text">
                <div class="social">
                  <a class="social_item" href="#" target="_blank">
                    <i class="fa fa-vk" aria-hidden="true"></i>
                  </a>
                  <a class="social_item" href="#" target="_blank">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                  <a class="social_item" href="#" target="_blank">
                    <i class="fa fa-pinterest" aria-hidden="true"></i>
                  </a>
                  <a class="social_item" href="#" target="_blank">
                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                  </a>
                </div>
              </div>

            </div>
            <div class="card_info">
              <div class="card_name">Виктория Павлова</div>
              <div class="card_prof">Менеджер Проектов</div>
            </div>
          </div>

          <div class="card_item">
            <div class="card_inner">
              <div class="card_img">
                <img src="/assets/images/Our_team1.jpg" alt="" />
              </div>
              <div class="card_text">
                <div class="social">
                  <a class="social_item" href="#" target="_blank">
                    <i class="fa fa-vk" aria-hidden="true"></i>
                  </a>
                  <a class="social_item" href="#" target="_blank">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                  <a class="social_item" href="#" target="_blank">
                    <i class="fa fa-pinterest" aria-hidden="true"></i>
                  </a>
                  <a class="social_item" href="#" target="_blank">
                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="card_info">
              <div class="card_name">Илья Зинин</div>
              <div class="card_prof">Full-stack разработчик</div>
            </div>
          </div>
          <div class="card_item">
            <div class="card_inner">
              <div class="card_img">
                <img src="/assets/images/Our_team3.jpg" alt="" />
              </div>
              <div class="card_text">
                <div class="social">
                  <a class="social_item" href="#" target="_blank">
                    <i class="fa fa-vk" aria-hidden="true"></i>
                  </a>
                  <a class="social_item" href="#" target="_blank">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                  <a class="social_item" href="#" target="_blank">
                    <i class="fa fa-pinterest" aria-hidden="true"></i>
                  </a>
                  <a class="social_item" href="#" target="_blank">
                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="card_info">
              <div class="card_name">Иван Николаев</div>
              <div class="card_prof">Менеджер по рекламе</div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <!--Примеры наших работ-->
  <section class="section">
    <div class="container">

      <div class="section_header">
        <h3 class="section_suptitle">Портфолио</h3>
        <h2 class="section_title">Вебстудия HIDE</h2>

        <div class="section_text">
          <p>
            Посмотрите наши работы. Сайты - это самый простой способ увидеть на что мы способны. Выбирайте лучшее для себя.
          </p>
        </div>
      </div>
    </div>
    <div class="works">
      <div class="works_col">
        <div class="works_item">
          <img class="works_img" src="/assets/images/works/work9.jpg" alt="">
          <div class="works_info">
            <div class="works_title">Работа 1</div>
            <div class="works_text">Работа 1 текст</div>

          </div>

        </div>

        <div class="works_item">
          <img class="works_img" src="/assets/images/works/work10.jpg" alt="">
          <div class="works_info">
            <div class="works_title">Работа 2</div>
            <div class="works_text">Работа 2 текст</div>

          </div>

        </div>

      </div>
      <div class="works_col">
        <div class="works_item">
          <img class="works_img" src="/assets/images/works/work9.jpg" alt="">
          <div class="works_info">
            <div class="works_title">Работа 3</div>
            <div class="works_text">Работа 3 текст</div>

          </div>

        </div>

        <div class="works_item">
          <img class="works_img" src="/assets/images/works/work10.jpg" alt="">
          <div class="works_info">
            <div class="works_title">Работа 4</div>
            <div class="works_text">Работа 4 текст</div>

          </div>

        </div>


      </div>
      <div class="works_col">

        <div class="works_item">
          <img class="works_img" src="/assets/images/works/work12.jpg" alt="">
          <div class="works_info">
            <div class="works_title">Работа 6</div>
            <div class="works_text">Работа 6 текст</div>

          </div>

        </div>

      </div>


      <div class="works_col">
        <div class="works_item">
          <img class="works_img" src="/assets/images/works/work10.jpg" alt="">
          <div class="works_info">
            <div class="works_title">Работа 6</div>
            <div class="works_text">Работа 6 текст</div>

          </div>

        </div>

        <div class="works_item">
          <img class="works_img" src="/assets/images/works/work9.jpg" alt="">
          <div class="works_info">
            <div class="works_title">Работа 7</div>
            <div class="works_text">Работа 7 текст</div>
            <a class="all_works_href" href="/portfolio.php">Все работы</a>
          </div>

        </div>


      </div>

    </div>
  </section>

  <!--Блог-->

  <section class="section">

    <div class="container">
      <div class="section_header">
        <h3 class="section_suptitle">Вам будет полезно знать</h3>
        <h2 class="section_title">Блог - HIDE</h2>
        <a href="/articles.php">Все статьи</a>
      </div>
      <div class="blog">
        <?php
        $articles = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `id` DESC LIMIT 3 ");
        ?>

        <?php
        while ($art = mysqli_fetch_assoc($articles)) {
        ?>

          <div class="blog_item">
            <div class="blog_header">

              <div class="blog_header_img">

                <a href="/article.php?id=<?php echo $art['id']; ?>"> <img class="blog_photo" src="/assets/images/blog/<?php echo $art['image']; ?>" alt=""></a>
                </a>
              </div>
              <div class="blog_date">
                <div class="blog_date-day">15</div>
                Июнь

              </div>
            </div>

            <div class="blog_content">
              <div class="blog_title">
                <a href="/article.php?id=<?php echo $art['id']; ?>"><?php echo $art['title'];  ?></a>

              </div>
              <div class="blog_text"><?php echo mb_substr($art['text'], 0, 100, 'utf-8'); ?></div>

            </div>
            <div class="blog_footer">
              <div class="blog_stat">
                <span class="blog_stat_item">
                  <i class="far fa-eye"></i><?php echo $art['views']; ?>
                </span>
                <span class="blog_stat_item">
                  <i class="far fa-comments"></i>131
                </span>
              </div>
            </div>
          </div>

        <?php
        }
        ?>
      </div>
  </section>

  <!--Футер сайта-->
  <?php include "footer.php"; ?>

</body>

</html>