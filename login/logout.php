<?php 
include("./dbconnection.php");
  if(!isset($_SESSION)){
    session_start();
  }
  session_destroy();
  header("location: http://127.0.0.1:83/treinamento/phpProjects/projeto-todo-list/index.php");
?>