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
			<a href="?action=add">Добавить новость</a>
			<div>
				<table class="admin-table" border="1">
                    <tr>
                        <th>#</th>
                        <th>Дата</th>
                        <th>Категория</th>
                        <th>Заголовок</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php foreach($new as $item): ?>
                    <tr>
                        <td><?=$item['id']?></td>
                        <td><?=$item['datetime']?></td>
                        <td><?=$item['section']?> >> <?=$item['parent_section']?></td>
                        <td><a href="index.php?id=<?=$item['id']?>"><?=$item['title']?></a></td>
                        <td><a href="?action=edit&amp;id=<?=$item['id']?>">Редактировать</a></td>
                        <td><a href="?action=del&amp;id=<?=$item['id']?>">Удалить</a></td>
                    </tr>
                    <?php endforeach ?>
                </table>
            </div>
			<footer>

			</footer>
        </div>

    </body>
</html>