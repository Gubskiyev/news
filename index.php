<?php
require_once "core/news_class.php";

$news = new News();

if(isset($_GET['section']) && isset($_GET['sub'])) {
    $section = mysql_real_escape_string(htmlentities(htmlspecialchars(trim($_GET['section']))));
    $sub = $_GET['sub'];
    $new = $news->getNewsBySectionAndSub($section, $sub);
    require_once "view/index.php";
    die();
}

if(isset($_GET['section'])) {
    $section = mysql_real_escape_string(htmlentities(htmlspecialchars(trim($_GET['section']))));
    $new = $news->getNewsBySection($section);
    require_once "view/index.php";
    die();
}

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $new = $news->getNewsByID($id);
    require_once "view/index.php";
}

$new = $news->getAllNews();

require_once "view/index.php";
