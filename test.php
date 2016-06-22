<?php
require_once "core/user_class.php";

$user = new User();

$cookie = $user->authUser("admin", "admin");