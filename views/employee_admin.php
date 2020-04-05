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
        <?php if($_GET['action']=="add-employee"): ?>
        <form method="post" action="index.php?action=add-employee" class="employee">
            <label>avatar<input type="text" name="title" value="" class="article--title" autofocus required></label>
            <label>name<input type="date" name="date" value="" class="article--date" required></label>
            <label>position<textarea name="text" class="article--text" required></textarea></label>
            <input type="submit" value="Сохранить" class="btn">
        </form>
        <?php endif ?>

        <?php if($_GET['action']=="edit-employee"): ?>
        <form method="post" action="index.php?action=edit-employee&id=<?=$_GET['id']?>" class="article">
            <label>avatar<input type="text" name="title" value="<?=$employee['fname']?>" class="employee--name" autofocus required></label>
            <label>name<input type="date" name="date" value="<?=$employee['lname']?>" class="employee--name" required></label>
            <label>name<input type="date" name="date" value="<?=$employee['position']?>" class="employee--position" required></label>
            <label>name<input type="date" name="date" value="<?=$employee['avatar']?>" class="employee--avatar" required></label>
            <input type="submit" value="Сохранить" class="btn">
        </form>
        <?php endif ?>
    </div>
</body>
</html>