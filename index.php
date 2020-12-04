<?php
//yerli informasiyalar : pul,dil,zaman ve s.
session_start();
setlocale(LC_ALL,"US");

//direktoriyalar ucun sabitler teyin olunur define ile
$url="http://localhost/sinama/";
define("HOME","$url");
define("SOURCE","$url"."application/source/");
define("SERVERWAY", $_SERVER['DOCUMENT_ROOT'] . "/sinama/");

//init.php daxil olunur ve proqramin esas hissesi bawlayir
require_once './application/init.php';
$application = new Application;

?>

