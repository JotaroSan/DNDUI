<?php
/**
 * Created by PhpStorm.
 * User: jordanwoodard
 * Date: 8/8/16
 * Time: 1:29 PM
 */

require_once('Core/Mysql_Connection.php');


if(isset($_GET['controller']) && isset($_GET['action'])){
    $controller     = $_GET['controller'];
    $action         = $_GET['action'];
}else{
    $controller     = 'pages';
    $action         = 'home';
}

require_once('views/layout.php');