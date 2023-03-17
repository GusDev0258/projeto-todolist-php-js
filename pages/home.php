<?php
  include("../login/dbconnection.php");
  if(!isset($_SESSION)){
    session_start();
  }
  if($_SESSION['id'] == null || $_SESSION['id'] == false){
    session_destroy();
    header("location: http://127.0.0.1:83/treinamento/phpProjects/projeto-todo-list/index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" />
    <title>Home - Todo List</title>
  </head>
  <body>
    <main class="main-container">
      <form action="../login/logout.php" method="post" class="logout">
        <button class="btn-logout" type="submit">Sair</button>
      </form>
      <div class="todo-container">
        <h1>Your Tasks</h1>
        <div class="todo-search">
          <form action="" method="post">
            <input
              type="search"
              name="searchTask"
              id="searchTask"
              placeholder="Search Tasks"
            />
          </form>
        </div>
        <div class="todo-tasks-container">
          <button type="button" class="btn-addTask">New Task</button>
          <ul class="todo-tasks-list"></ul>
        </div>
      </div>
      <div class="register-modal-container-task">
        <div class="register-modal-task">
          <button class="btn-close-task" type="button">X</button>
          <form action="../login/registerTask.php" method="post">
            <label for="nomeTask">Task name</label>
            <input
              type="text"
              name="nomeTask"
              id="nomeTask"
              placeholder="Task title"
            />
            <label for="descTask">Task description</label>
            <textarea
              name="descTask"
              id="descTask"
              cols="30"
              rows="10"
            ></textarea>
            <button class="btn-cadastrar-task btn" type="submit">
              Add task
            </button>
          </form>
        </div>
      </div>
      <div class="completedMessage">
        <span class="message">Task completed!</span>
      </div>
    </main>
    <script type="module" src="../app.js"></script>
    <?php 
    ?>
  </body>
</html>
