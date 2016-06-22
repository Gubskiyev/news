<?php
require_once "core/news_class.php";

$news = new News($db);

$new = $news->getAllNews();



require_once "view/index.php";
