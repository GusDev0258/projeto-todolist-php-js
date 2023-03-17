<?php 
include("./dbconnection.php");
if($dbconnection){
$json = file_get_contents('php://input');
$data = json_decode($json, true);
$userName = htmlspecialchars($data["userName"]);
$userPassword = $data["userPassword"];
if($userName != "" && $userPassword != ""){
  $result = pg_query($dbconnection, "SELECT id_usuario ,username, password FROM usuarios WHERE username = '{$userName}'") or die("erro ao logar");  
  if($row = pg_fetch_assoc($result)){
      if($row['username'] == $userName && password_verify($userPassword, "{$row['password']}") == $userPassword){
        if(!isset($_SESSION)){
          session_start();
          $_SESSION['id'] = $row['id_usuario'];
          $_SESISON['username'] = $row['username'];
          echo json_encode([
            "validado"=>true
          ]);
        }
      }
      }else{
        echo json_encode(["validado" => false]);
      }
  }else{
    echo json_encode(["validado" => false]);
  }
}else{
  echo json_encode(["validado" => false]);
}
?>