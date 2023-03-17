<?php 
  include("./dbconnection.php");
  if(!isset($_SESSION)){
    session_start();
  }else{
    echo 'Faça login!';
    header("location: http://127.0.0.1:83/treinamento/phpProjects/projeto-todo-list/index.php");
    die();
  }
  if(!$dbconnection || $_SESSION["id"] == null){
    echo '<script>console.log("Falha na conexão")</script>';
    header("location: http://127.0.0.1:83/treinamento/phpProjects/projeto-todo-list/index.php");
  }else{
    $id_usuario = htmlspecialchars($_SESSION["id"]);
    $titulo = htmlspecialchars($_POST["nomeTask"]);
    $descricao = htmlspecialchars($_POST["descTask"]);
    $taskArray = array("id_usuario" => $id_usuario,"titulo" => $titulo, "descricao" => $descricao);
    pg_insert( $dbconnection, 'tasks', $taskArray);
    header("location: http://127.0.0.1:83/treinamento/phpProjects/projeto-todo-list/pages/home.php");
  }
?>