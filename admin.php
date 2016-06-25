<?php

require_once "core/news_class.php";

$news = new News();

if(isset($_REQUEST['submit'])) {
    if($_POST['submit'] == "Добавить") {
        $title = trim(strip_tags($_POST['title']));
        $text = $_POST['text'];
        $date = trim(strip_tags($_POST['date']));
        $author = trim(strip_tags($_POST['author']));
        $section = $_POST['section'];
        $sub = $_POST['sub'];

        $news->addNews($title,$text,$author,$section,$sub);
    }

    if($_POST['submit'] == "Обновить") {
        $id = $_POST['id'];
        $title = trim(strip_tags($_POST['title']));
        $date = trim(strip_tags($_POST['date']));
        $content = trim(strip_tags($_POST['content']));

        $news->upArticle($id, $title, $date, $content);
    }
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    if ($action == "add") {
        require_once "view/admin_add.php";
    }elseif($action == "edit") {
        $id = $_GET['id'];
        $article = $blog->editArticle($id);
        require_once "view/admin_edit.php";
    }elseif($action == "del") {
        $id = $_GET['id'];
        $news->delArticle($id);
        $articles = $blog->getAllArticles();
        require_once "view/admin_index.php";
    }
}else{
    $action = "";
    $new = $news->getAllNews();
    require_once "view/admin_index.php";
}


?>