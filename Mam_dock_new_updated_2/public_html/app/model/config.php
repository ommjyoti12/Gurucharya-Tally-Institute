<?php
error_reporting(E_ALL & ~E_NOTICE);
date_default_timezone_set('Asia/Kolkata');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tyi_app";

session_start();

$projectPath ='http://localhost/ed/';

$page_urls=basename($_SERVER['SCRIPT_NAME']);
$page_url = rtrim($page_urls,".php");

?>