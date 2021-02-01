<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/styles.css">
  <link rel="stylesheet" href="../styles/formStyles.css">
  <title>Tela de Cadastro</title>
</head>
<body>
  <main>
    <form action="../routes/postSignUp.php" method="post">
    
      <h2>Cadastre-se!</h2>
      <div id="main-div">
        <div id="div-inputs">
          <input type="text" name="username" id="username" placeholder="Usuário">
          <input type="password" name="password" id="password" placeholder="Senha">
        </div>
      </div>

      <div id="div-buttons">
        <button class="styled-button" type="submit">Cadastrar</button>
      </div>
    </form>
  </main>
</body>
</html>
