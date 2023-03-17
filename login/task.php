<?php 
  include("./dbconnection.php");

if(!isset($_SESSION)){
  session_start();
}
$id_usuario = $_SESSION['id'];

$consulta = pg_query($dbconnection, "SELECT id_task,titulo, descricao FROM tasks WHERE id_usuario = {$id_usuario}");
$array = Array();
while($arrayConsulta = pg_fetch_assoc($consulta)){
  $array[] = $arrayConsulta;
}
$encode = json_encode($array);
echo $encode;
?>