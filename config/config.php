<?php
//$server_name = "localhost";
//$server_user = "root";
//$server_pass = "12345678";
//$server_db = "web";

$server_name = "us-cdbr-east-04.cleardb.com";
$server_user = "b5e50a0c60c553";
$server_pass = "7c48cdb4";
$server_db = "heroku_7afa5ac21a5620b";

$link = mysqli_connect($server_name,$server_user,$server_pass,$server_db);

if (!$link) {
	die('Connect Error:'.mysql_connect_errno());
}

mysqli_query($link,"set names utf8");

?>