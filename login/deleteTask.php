<?php 
  include("./dbconnection.php");
  if(!isset($_SESSION)){
    session_start();
  }
  $id_usuario = $_SESSION['id'];
  $id_task = $_GET["id_task"];
  pg_query($dbconnection, "DELETE FROM tasks WHERE id_usuario = {$id_usuario} AND id_task = {$id_task}");
  header("location: http://127.0.0.1:83/treinamento/phpProjects/projeto-todo-list/pages/home.php");
?>