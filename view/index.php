<!DOCTYPE html>
<html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>Главная страница</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><a href="/">Новостная лента</a></h1>
        </div>
        <?php foreach($new as $item): ?>
        <div class="news">
            <h3><a href="?id=<?=$item['id']?>"><?=$item['title']?></a></h3>
            <em>Опубликовано: <?=$item['datetime']?></em><br>
            <small>Категория: <a href="?section=<?=$item['section']?>"><?=$item['section']?></a></small>
            <br><br><p><?=nl2br($item['text'])?></p>

        </div>
        <?php endforeach;?>
        <div class="footer">
            <small>
                <p>Copyright reserverd @ 2016</p><br>
                <a href="admin.php">Панель админа</a>
            </small>
        </div>
    </div>
</body>
</html>