<?php
/**
 * Created by PhpStorm.
 * User: jordanwoodard
 * Date: 8/8/16
 * Time: 1:41 PM
 */

class Mysql_DB {

    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
        if (!isset(self::$instance)) {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instance = new PDO('mysql:host=127.0.0.1;dbname=D&DUI', 'root', 'loktar', $pdo_options);
        }
        return self::$instance;
    }

}