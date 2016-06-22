<?php
/**
 * Created by PhpStorm.
 * User: GubskiyEV
 * Date: 21.06.16
 * Time: 22:59
 */
require_once "config_class.php";

class DataBase {
    private $config;
    private $mysqli;

    public function __construct() {
        $this->config = new Config();
        $this->mysqli = new mysqli($this->config->dbhost, $this->config->dbuser, $this->config->dbpass, $this->config->dbname);
        $this->mysqli->query("SET NAMES 'utf8'");
    }

    public function query($query) {
        $this->mysqli->query($query);
    }

    public function select($query) {
        $res = $this->mysqli->query($query);
        $ret = [];
        while($row = mysqli_fetch_assoc($res)) {
            $ret[] = $row;
        }
        return $ret;
    }

    public function insert($query) {
        $this->query($query);
    }

    public function update($table_name, $field, $value, $where) {
        $where = explode('=', $where);
        $query = "UPDATE `$table_name` SET `$field` = '$value' WHERE `$where[0]` = '$where[1]'";
        $this->query($query);
    }

    public function delete($table_name, $field, $where) {
        $where = explode('=', $where);
        $query = "DELETE FROM `$table_name` WHERE `$where[0]` = '$where[1]'";
        $this->query($query);
    }

    public function getAll($table_name) {
        return $this->select("SELECT * FROM `$table_name`");
    }
}