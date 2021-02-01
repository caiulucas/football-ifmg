<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/styles.css">
  <link rel="stylesheet" href="./styles/formStyles.css">
  <title>Tela de Login</title>
</head>
<body>
  <main>
    <form action="./routes/postLogin.php" method="post">
      <h2>Bem vindo!</h2>
      <div id="main-div">
        <div id="div-inputs">
          <input type="text" name="username" id="username" placeholder="Usuário">
          <input type="password" name="password" id="password" placeholder="Senha">
        </div>
        <a href="views/signUp.php">Não possui login? Cadastre-se</a>
      </div>

      <div id="div-buttons">
        <button class="styled-button" type="submit">Logar</button>
        <a class="styled-button button-alternative" href="views/listTeams.php">Apenas Ver</a>
      </div>
    </form>
  </main>
</body>
</html>
