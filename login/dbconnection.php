<?php
$host = "";
$port = "";
$dbname = "";
$user = "";
$password = "";

$dbconnection = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password") or die("Failed to connect to DataBase");


?>