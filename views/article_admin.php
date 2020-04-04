<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My blog</title>
    <link rel="stylesheet" href="add.css">
</head>
<body>
    <div class="section--blog">
        <div class="blog--header">
            <h1 class="header">Мой Первый Блог</h1>
        </div>
        <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
            <label>Title<input type="text" name="title" value="<?=$article['title']?>" class="form--item" autofocus required></label>
            <label>Date<input type="date" name="date" value="<?=$article['date']?>" class="form--item" required></label>
            <label>Text<textarea name="text" class="form--item" required><?=$article['text']?></textarea></label>
            <input type="submit" value="Сохранить" class="btn">
        </form>
    </div>
</body>
</html>