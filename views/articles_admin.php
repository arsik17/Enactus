<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My blog</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="section--blog">
        <div class="blog--header">
            <h1 class="header">Мой Первый Блог</h1>
        </div>
        <a href="index.php?action=add">Add article</a>
        <table class="admin--table">
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
                <td><a href="index.php?action=edit&id=<?=$a['id']?>">Edit</a></td>
                <td><a href="index.php?action=delete&id=<?=$a['id']?>">Delete</a></td>
            </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>
</html>