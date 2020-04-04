<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900&display=swap&subset=cyrillic" rel="stylesheet">
    <title>Enactus Taraz</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header_inner">

                <img src="./assets/pictures/logo.png" alt="enactus logo" class="header__logo">

                <nav class="header__nav">
                    <div class="nav__item">О нас</div>
                    <div class="nav__item">Что мы делаем</div>
                    <div class="nav__item">Участники</div>
                    <div class="nav__item">Написать нам</div>
                </nav>
            </div>
        </div>
    </header>
    <section class="intro">
        <div class="container">
            <div class="intro__inner">
                <div class="intro__title">
                    Миру нужен<br> <div class="intro__enactus">enactus.</div>
                </div>  
                <div class="intro__wrapper">
                    <img src="./assets/pictures/intro.jpg" alt="teamwork" class="intro__picture">
                </div>
            </div>
        </div>
    </section>
    <section class="blog">
        <?php
            require_once('./database.php');
            require_once('./models/articles.php');

            $link = db_connect();
            $articles = articles_all(@$link);
        ?>
        <?php foreach($articles as $a): ?>
            <div class="article">
                <h3 class="article--title"><?=$a['title']?></h3>
                <p class="article--text"><?=$a['text']?></p>
                <em class="article--date">Published: <?=$a['date']?></em>
                <a href="article.php?id=<?=$a['id']?>" class="article--read">Читать далее</a>
            </div>
        <?php endforeach ?>
    </section>
</body>
</html>