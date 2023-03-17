<?php 
include('../index.html');
$dbconnection = pg_connect("host=localhost port=5432 dbname=localphptreinamento user=postgres password=PGCEAVI");
  if(!$dbconnection){
    echo '<script>console.log("Falha na conexão")</script>';
  }else{
    $userName = $_POST["username"];
    $userPassword = $_POST["password"];
    $hashPassword = password_hash($userPassword, PASSWORD_DEFAULT);
    $userEmail = $_POST["email"];
    $userArray = array("username" => $userName,"password" => $hashPassword, "email" => $userEmail);
    pg_insert( $dbconnection, 'usuarios', $userArray);
    header("location: http://127.0.0.1:83/treinamento/phpProjects/projeto-todo-list/index.php");
  }
  
?>