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
			<a href="admin.php">Вернуться</a>
			<div>
				<form action="admin.php" name="add" method="post">
                    <label>
                        Заголовок
                        <input type="text" name="title" value="" required />
                    </label>
                    <!--
                    <label>
                        Дата 
                        <input type="date" name="date" value="" />
                    </label>
                    -->
                    <input type="hidden" name="date" value="<?=date('Ymd')?>" />
                    <label>
                        Содержание
                        <textarea name="content" required></textarea>
                    </label>
                    <input type="submit" name="submit" class="btn-danger" value="Добавить" />
                </form>
            </div>
			<footer>
				<p>Мой первый блог<br>Copyrights &copy; 2015</p>
				<a href="index.php">Панель Администратора</a>
			</footer>
        </div>

    </body>
</html>