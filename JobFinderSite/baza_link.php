<?php
$serwer="mysql.cba.pl";
$nazwa_bazy="maciejpelc_maciejgoryczko";
$login=""; //Deleted for security reasons
$pass=""; //Deleted for security reasons

$conn = new PDO("mysql:host=$serwer;dbname=$nazwa_bazy", "$login", "$pass");

?>