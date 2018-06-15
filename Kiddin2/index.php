<?php 
$controller = isset($_GET['c'])?ucfirst($_GET['c']):'User';
$action = isset($_GET['a'])?$_GET['a']:'login';
$config = include('./config.php');
include ('./Common/function.php');
include ('./Controllers/Controller.php');
include ('./Controllers/'.$controller.'.php');
include ('./Model/DB.php');
$obj = new $controller();
$obj->$action();