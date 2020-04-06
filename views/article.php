<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900&display=swap&subset=cyrillic" rel="stylesheet">
    <title>Enactus Articles</title>
    <link rel="stylesheet" href="../assets/css/article.css">
</head>
<body>
<div class="section--blog">
        <div class="blog--header">
            <h1 class="header">Enactus</h1>
        </div>

        <div class="article">
            <h3 class="title"><?=$article['title']?></h3>
            <p class="text"><?=$article['text']?></p>
            <em class="date">Published: <?=$article['date']?></em>
        </div>
    </div>
</body>
</html>