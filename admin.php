<?php
require_once "core/news_class.php";
$blog = new Article();


    if(isset($_REQUEST['submit'])) {
        if($_POST['submit'] == "Добавить") {
            $title = trim(strip_tags($_POST['title']));
            $date = trim(strip_tags($_POST['date']));
            $content = trim(strip_tags($_POST['content']));

            $blog->addArticle($title, $date, $content);
        }elseif($_POST['submit'] == "Обновить") {
            $id = $_POST['id'];
            $title = trim(strip_tags($_POST['title']));
            $date = trim(strip_tags($_POST['date']));
            $content = trim(strip_tags($_POST['content']));

            $blog->upArticle($id, $title, $date, $content);
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
            $blog->delArticle($id);
            $articles = $blog->getAllArticles();
            require_once "view/admin_index.php";
        }
    }else{
        $action = "";
        $articles = $blog->getAllArticles();
        require_once "view/admin_index.php";
    }


?>