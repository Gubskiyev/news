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
}