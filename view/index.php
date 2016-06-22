<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Главная страница</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
</head>
<body>
    <div class="container">

        <h1>Новостная лента</h1>
        <?php foreach($new as $item): ?>
        <div class="news">
            <h3><a href="?id=<?=$item['id']?>"><?=$item['title']?></a></h3>
            <em>Опубликовано: <?=$item['datetime']?></em><br>
            <small>Категория: <?=$item['section']?></small>
            <br><br><p><?=nl2br($item['text'])?></p>

        </div>
        <?php endforeach;?>
    </div>
</body>
</html>