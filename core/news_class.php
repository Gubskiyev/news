<?php
require_once "database_class.php";

class News {
    public $db;

    public function __construct() {
        $this->db = new DataBase();
    }

    public function getAllNews() {
        return $this->db->select("SELECT * FROM `news`");
    }

    public function getNewsBySection($section) {
        $query = "SELECT * FROM `news` WHERE `section` = '$section'";
        return $this->db->select($query);
    }

    public function getNewsByID($id) {
        $query = "SELECT * FROM `news` WHERE `id` = '$id'";
        return $this->db->select($query);
    }
}