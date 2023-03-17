<?php 
  if(isset($_SESSION)){
    session_destroy();
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Projeto de uma todo list usando JS PHP" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,400&family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <main class="grid-layout">
        <div class="login-container">
          <h2 class="login-titulo">Login</h2>
          <form action="./modules/login.js" method="post" id="login-form">
            <label for="userName">Username</label>
            <input
              type="text"
              name="userName"
              id="userName"
              placeholder="Seu usuário"
              required
            />
            <label for="userPassword">Password</label>
            <input
              type="password"
              name="userPassword"
              id="userPassword"
              placeholder="Sua senha"
              required
            />
            <button class="btn-entrar btn" type="button">Entrar</button>
            <p>Não possui uma conta?<a href=""> registre-se</a></p>
            <p class="incorreto"></p>
          </form>
        </div>
        <div class="other-Content">
          <h1>Login to do your tasks!</h1>
          <p>Consistency is the key</p>
        </div>
        <div class="register-modal-container">
          <div class="register-modal">
            <button class="btn-close" type="button">X</button>
            <form action="./login/register.php" method="post">
              <label for="userName">Username</label>
              <input
                type="text"
                name="username"
                id="registerName"
                placeholder="Seu usuário"
                required
              />
              <label for="userPassword">Password</label>
              <input
                type="password"
                name="password"
                id="registerPassword"
                placeholder="Sua senha"
                required
              />
              <label for="userEmail">E-mail</label>
              <input
                type="email"
                name="email"
                id="registerEmail"
                placeholder="email@email.com"
                required
              />
              <button class="btn-cadastrar btn" type="submit">Cadastrar</button>
            </form>
          </div>
        </div>
      </main>
    </div>
    <script type="module" src="app.js"></script>
  </body>
</html>
