<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin panel</title>

        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1>Панель администратора</h1>
			<a href="?action=add">Добавить статью</a>
			<div>
				<table class="admin-table" border="1">
                    <tr>
                        <th>#</th>
                        <th>Дата</th>
                        <th>Заголовок</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php foreach($articles as $article): ?>
                    <tr>
                        <td><?=$article['id']?></td>
                        <td><?=$article['date']?></td>
                        <td><a href="article.php?id=<?=$article['id']?>"><?=$article['title']?></a></td>
                        <td><a href="?action=edit&amp;id=<?=$article['id']?>">Редактировать</a></td>
                        <td><a href="?action=del&amp;id=<?=$article['id']?>">Удалить</a></td>
                    </tr>
                    <?php endforeach ?>
                </table>
            </div>
			<footer>
				<p>Мой первый блог<br>Copyrights &copy; 2015</p>
				<a href="index.php">Панель Администратора</a>
			</footer>
        </div>

    </body>
</html>