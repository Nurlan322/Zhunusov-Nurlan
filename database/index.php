<?php
$hostname = 'localhost';
$username = 'Nurlan';
$password = '123';
$dbname = 'city';
@mysqli_connect($hostname, $username, $password, $dbname);
var_dump(mysqli_connect_error());
?>