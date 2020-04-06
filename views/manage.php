<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900&display=swap&subset=cyrillic" rel="stylesheet">
    <title>My blog</title>
    <link rel="stylesheet" href="../assets/css/manage.css">
</head>
<body>
    <div class="section">
        <div class="header">
            <h1 class="header">Управление БД</h1>
        </div>
        <?php if($_GET['action']=="add-article"): ?>
            <div class="container">
                <form method="post" action="index.php?action=add-article" class="article">
                    <label class="label">Название<input type="text" name="title" value="" class="article--title" autofocus required></label>
                    <label class="label">Дата<input type="date" name="date" value="" class="article--date" required></label>
                    <label class="label">Текст<textarea name="text" class="article--text" required></textarea></label>
                    <input type="submit" value="Сохранить" class="btn">
                </form>
            </div>
        <?php endif ?>

        <?php if($_GET['action']=="edit-article"): ?>
            <div class="container">
                <form method="post" action="index.php?action=edit-article&id=<?=$_GET['id']?>" class="article">
                    <label class="label">Название<input type="text" name="title" value="<?=$article['title']?>" class="article--title" autofocus required></label>
                    <label class="label">Дата<input type="date" name="date" value="<?=$article['date']?>" class="article--date" required></label>
                    <label class="label">Текст<textarea name="text" class="article--text" required><?=$article['text']?></textarea></label>
                    <input type="submit" value="Сохранить" class="btn">
                </form>
            </div>
        
        <?php endif ?>

        <?php if($_GET['action']=="add-employee"): ?>
            <div class="container">
                <form method="post" action="index.php?action=add-employee" class="employee">
                    <label class="label">Имя</label>
                    <input type="text" name="fname" value="" class="employee--name" autofocus required>
                    <label class="label">Фамилия</label>
                    <input type="text" name="lname" value="" class="employee--name" required>
                    <label class="label">Должность</label>
                    <input type="text" name="position" value="" class="employee--position" required>
                    <label class="label">Аватар</label>
                    <input type="text" name="avatar" value="" class="employee--avatar" required>
                    <input type="submit" value="Сохранить" class="btn">
                </form>
            </div>
        
        <?php endif ?>

        <?php if($_GET['action']=="edit-employee"): ?>
            <div class="container">
                <form method="post" action="index.php?action=edit-employee&id=<?=$_GET['id']?>" class="employee">
                    <label class="label">Имя<input type="text" name="fname" value="<?=$employee['fname']?>" class="employee--name" autofocus required></label>
                    <label class="label">Фамилия<input type="text" name="lname" value="<?=$employee['lname']?>" class="employee--name" required></label>
                    <label class="label">Должность<input type="text" name="position" value="<?=$employee['position']?>" class="employee--position" required></label>
                    <label class="label">Аватар<input type="text" name="avatar" value="<?=$employee['avatar']?>" class="employee--avatar" required></label>
                    <input type="submit" value="Сохранить" class="btn">
                </form>
            </div>
        
        <?php endif ?>
    </div>
</body>
</html>