<?php
require_once "database_class.php";

class User {

    private $db;

    public function __construct() {
        $this->db = new DataBase();
    }

    public function authUser($login,$pass) {
        if(!$this->getLoginAndPass($login, $pass)) return false;
        $this->setCookie($login);
    }

    public function getUserOnLogin($login) {
        $query = "SELECT * FROM `user` WHERE `login` = '$login'";
        $array = $this->db->select($query);
        if(count($array) == 0) return false;
        return $array;
    }

    public function getLoginAndPass($login, $pass) {
        $pass = md5($pass);
        $query = "SELECT * FROM `user` WHERE `login` = '$login' AND `pass` = '$pass'";
        $array = $this->db->select($query);
        if(count($array) == 0) return false;
        return true;
    }

    public function setCookie($login) {
        setcookie("login",$login, time() + 60 * 60 * 24 * 365);
    }
}