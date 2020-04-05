<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900&display=swap&subset=cyrillic" rel="stylesheet">
    <title>Enactus Taraz</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/aos.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header_inner">

                <img src="./assets/pictures/logo.png" alt="enactus logo" class="header__logo" data-aos="zoom-in" data-aos-duration="700">

                <nav class="header__nav">
                    <a href="#" class="nav__item" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="0">О нас</a>
                    <a href="#" class="nav__item" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="10">Что мы делаем</a>
                    <a href="#" class="nav__item" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">Участники</a>
                    <a href="#" class="nav__item" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">Написать нам</a>
                </nav>
            </div>
        </div>
    </header>
    <section class="intro">
        <div class="container">
            <div class="intro__inner">
                <div class="intro__title" data-aos="fade-right" data-aos-delay="100" data-aos-duration="700" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    Миру нужен<br> <div class="intro__enactus" data-aos="fade-right" data-aos-delay="1000" data-aos-duration="800">enactus.</div>
                </div>  
                <div class="intro__wrapper" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="./assets/pictures/intro.jpg" alt="teamwork" class="intro__picture">
                </div>
            </div>
        </div>
    </section>
    <section class="blog" id="blog">
        <div class="section__title" data-aos="fade-down" data-aos-duration="1500">Enactus News</div>
        <div class="blog--container">
            <?php
                require_once('./database.php');
                require_once('./models/articles.php');

                $link = db_connect();
                $articles = articles_all(@$link);
            ?>
            <?php (int)$k=0; foreach($articles as $a): ?>
                <div class="article" data-aos="slide-up" data-aos-duration="500" data-aos-offset="<?=$k?>">
                    <h3 class="article--title"><?=$a['title']?></h3>
                    <p class="article--text"><?=$a['text']?></p>
                    <em class="article--date">Published: <?=$a['date']?></em>
                    <a href="article.php?id=<?=$a['id']?>" class="article--read">Читать далее</a>
                </div>
            <?php $k=$k+40; endforeach ?>
        </div>
    </section>
    <section class="team" id="team">
        <div class="section__title" data-aos="fade-down" data-aos-duration="1500">Our Team</div>
        <div class="team--container">
            <?php
                require_once('./database.php');
                require_once('./models/employees.php');

                $link = db_connect();
                $employees = employees_all(@$link);
            ?>
            <?php (int)$k=0; foreach($employees as $e): ?>
                <div class="employee" data-aos="slide-left" data-aos-duration="2000" data-aos-delay="<?=$k?>">
                    <img src="<?=$e['avatar']?>" alt="avatar" class="employee--avatar">
                    <p class="employee--name"><?=$e['fname']?> <?=$e['lname']?></p>
                    <em class="employee--position"><?=$e['position']?></em>
                </div>
            <?php $k=$k+150; endforeach ?>
        </div>
    </section>
    <section class="project">
        <div class="container">
            <div class="section__title" data-aos="fade-down" data-aos-duration="1500">Проекты</div>

            <div class="project__inner">
                <div class="project__item" data-aos="fade-up" data-aos-duration="1500">
                    <img class="project__icon" src="./assets/pictures/projects/bin-eco.jpg" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">

                    <div class="project__title">
                        Bin-eco
                    </div>
                    <div class="project__subtitle">
                        Проект направленный на сохранение чистоты города
                    </div>
                    <button class="project__button" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400">Перейти</button>
                </div>
                <div class="project__item" data-aos="fade-up" data-aos-duration="1500">
                    <img class="project__icon" src="./assets/pictures/projects/crepiks.png" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">

                    <div class="project__title">
                        Crepiks academi
                    </div>
                    <div class="project__subtitle">
                        Онлайн школа  веб программирования
                    </div>
                    <button class="project__button" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">Перейти</button>

                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="footer__inner">
            <div class="footer__block">
                <div class="footer__title">Enactus taraz</div>
                <div class="footer__content">
                    <div class="footer__item"data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">Наша миссия</div>
                    <div class="footer__item"data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Наша история</div>
                    <div class="footer__item"data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">Участники</div>
                    <div class="footer__item"></div>
                    <div class="footer__item"></div>
                    <div class="footer__item"></div>
                </div>

            </div>
            <div class="footer__block">
                <div class="footer__title">Что мы делаем</div>
                <div class="footer__content">
                    <div class="footer__item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">Статьи</div>
                    <div class="footer__item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">Новости</div>
                    <div class="footer__item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Проекты</div>
                    <div class="footer__item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">Форумы</div>
                    <div class="footer__item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">Ghb</div>
                    <div class="footer__item"></div>
                </div>

            </div>
            <div class="footer__block">
                <div class="footer__title">Соц.сети</div>
                <div class="footer__content">
                    <a href=""><div class="footer__item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">Youtube</div></a>
                    <a href="https://www.instagram.com/enactuskaz.nis_taraz/" target="blank"><div class="footer__item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Instagram</div></a>
                    <a href=""><div class="footer__item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">Telegram</div></a>
                    <a href=""><div class="footer__item"></div></a>
                    <a href=""><div class="footer__item"></div></a>
                    <a href=""><div class="footer__item"></div></a>
                </div>
            </div> 
            <div class="footer__block">
                <div class="footer__title">Связаться с нами</div>
                <div class="footer__content">
                    <div class="footer__item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0">Как вступить</div>
                    <div class="footer__item"></div>
                    <div class="footer__item"></div>
                    <div class="footer__item footer__item_email" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">enactus.trz@gmail.com</div>
                    <div class="footer__item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">+7 771 000 0000</div>
                    <div class="footer__item"></div>
                </div>
            </div> 
            </div> <!-- footer__inner -->
        </div><!--container -->
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="./assets/js/aos.js"></script>
    <script type="text/javascript">
    AOS.init();
    </script>
</body>
</html>