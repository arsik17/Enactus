<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900&display=swap&subset=cyrillic" rel="stylesheet">
    <title>My blog</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>
<div class="section">
        <div class="blog--header">
            <h1 class="header">Articles:</h1>
        </div>
        <a href="index.php?action=add-article" class="add">Add article</a>
        <table class="articles--table">
            <tr>
                <th>Дата</th>
                <th>Заголовок</th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach($articles as $a): ?>
            <tr>
                <td><?=$a['date']?></td>
                <td><?=$a['title']?></td>
                <td><a href="index.php?action=edit-article&id=<?=$a['id']?>" class="manage">Edit</a></td>
                <td><a href="index.php?action=delete-article&id=<?=$a['id']?>" class="manage">Delete</a></td>
            </tr>
            <?php endforeach ?>
        </table>
        <div class="team--header">
            <h1 class="header">Employees:</h1>
        </div>
        <a href="index.php?action=add-employee" class="add">Add employee</a>
        <table class="employees--table">
            <tr>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Должность</th>
                <th>Аватар</th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach($employees as $e): ?>
            <tr>
                <td><?=$e['fname']?></td>
                <td><?=$e['lname']?></td>
                <td><?=$e['position']?></td>
                <td><?=$e['avatar']?></td>
                <td><a href="index.php?action=edit-employee&id=<?=$e['id']?>" class="manage">Edit</a></td>
                <td><a href="index.php?action=delete-employee&id=<?=$e['id']?>" class="manage">Delete</a></td>
            </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>
</html>