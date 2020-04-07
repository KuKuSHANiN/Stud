<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// Переменные с формы
/*$name = $_POST['e-mail'];
$text = $_POST['password'];  // пароль логина БД  DSKY  xRrUOlds0ew1Lb8A*/

$servername = "127.0.0.1";
$database = "dsky";
$username = "DSKY";
$password = "xRrUOlds0ew1Lb8A";

$mysqli = new mysqli($servername, $username, $password, $database);
if ($mysqli->connect_errno) {
    die("Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}

$query = "INSERT INTO users (`e-mail`, `password`) VALUES ('test@test.com', 'sdfsdfsd');";
$mysqli->query($query);   //query - самостоятельнная функция выполнения строки.
echo $mysqli->host_info . "\n";





//(SELECT DISTINCT `User`, `Host` FROM `mysql`.`user` ) UNION (SELECT DISTINCT `User`, `Host` FROM `mysql`.`db` ) UNION (SELECT DISTINCT `User`, `Host` FROM `mysql`.`tables_priv` ) UNION (SELECT DISTINCT `User`, `Host` FROM `mysql`.`columns_priv` ) UNION (SELECT DISTINCT `User`, `Host` FROM `mysql`.`procs_priv` ) ORDER BY `User` ASC, `Host` ASC;