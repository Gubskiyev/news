<?php
require_once "core/user_class.php";
require_once "core/news_class.php";
$new = new News();
$user = new User();

//$cookie = $user->authUser("admin", "admin");

$new->addNews("Новая","лыоалоы а лыоалдыоалдо","Пупиг","Политика","Россия");
