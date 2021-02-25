<?php

// FRONT CONTROLLER

// Общие настройки
ini_set('display_errors',1);
error_reporting(E_ALL);

session_start();

// Подключение файлов системы
define('W:/domains/test.com/', dirname(__FILE__));
require_once('W:/domains/test.com/components/Autoload.php');


// Вызов Router
$router = new Router();
$router->run();