<?php
$host = "localhost";
$port = "5432";
$dbname = "localphptreinamento";
$user = "postgres";
$password = "PGCEAVI";

$dbconnection = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password") or die("Failed to connect to DataBase");


?>