<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My blog</title>
    <link rel="stylesheet" href="../assets/css/article.css">
</head>
<body>
    <div class="section--blog">
        <div class="blog--header">
            <h1 class="header">Мой Первый Блог</h1>
        </div>
        <?php if($_GET['action']=="add-article"): ?>
        <form method="post" action="index.php?action=add-article" class="article">
            <label>Title<input type="text" name="title" value="" class="article--title" autofocus required></label>
            <label>Date<input type="date" name="date" value="" class="article--date" required></label>
            <label>Text<textarea name="text" class="article--text" required></textarea></label>
            <input type="submit" value="Сохранить" class="btn">
        </form>
        <?php endif ?>

        <?php if($_GET['action']=="edit-article"): ?>
        <form method="post" action="index.php?action=edit-article&id=<?=$_GET['id']?>" class="article">
            <label>Title<input type="text" name="title" value="<?=$article['title']?>" class="article--title" autofocus required></label>
            <label>Date<input type="date" name="date" value="<?=$article['date']?>" class="article--date" required></label>
            <label>Text<textarea name="text" class="article--text" required><?=$article['text']?></textarea></label>
            <input type="submit" value="Сохранить" class="btn">
        </form>
        <?php endif ?>

        <?php if($_GET['action']=="add-employee"): ?>
        <form method="post" action="index.php?action=add-employee" class="employee">
        <label>Имя<input type="text" name="fname" value="" class="employee--name" autofocus required></label>
            <label>Фамилия<input type="text" name="lname" value="" class="employee--name" required></label>
            <label>Должность<input type="text" name="position" value="" class="employee--position" required></label>
            <label>Аватар<input type="text" name="avatar" value="" class="employee--avatar" required></label>
            <input type="submit" value="Сохранить" class="btn">
        </form>
        <?php endif ?>

        <?php if($_GET['action']=="edit-employee"): ?>
        <form method="post" action="index.php?action=edit-employee&id=<?=$_GET['id']?>" class="employee">
            <label>Имя<input type="text" name="fname" value="<?=$employee['fname']?>" class="employee--name" autofocus required></label>
            <label>Фамилия<input type="text" name="lname" value="<?=$employee['lname']?>" class="employee--name" required></label>
            <label>Должность<input type="text" name="position" value="<?=$employee['position']?>" class="employee--position" required></label>
            <label>Аватар<input type="text" name="avatar" value="<?=$employee['avatar']?>" class="employee--avatar" required></label>
            <input type="submit" value="Сохранить" class="btn">
        </form>
        <?php endif ?>
    </div>
</body>
</html>