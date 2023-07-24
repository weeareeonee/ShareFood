<?php 
$host = "127.0.0.1:3307";
$dbname = "zakat";
$dbuser = "root";
$dbpass = "";
$opts = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];
$zkt = "mysql:host=$host;charset=utf8;dbname=$dbname;";
$db = new PDO($zkt, $dbuser, $dbpass, $opts);
?>