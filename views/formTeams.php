<?php
  session_start();
  if ( (!isset($_SESSION['username']) == true) and (!isset($_SESSION['password']) == true)) {
    header('location:listTeams.php');
  }
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/styles.css">
  <link rel="stylesheet" href="../styles/styledLists.css">
  <link rel="stylesheet" href="../styles/formStyles.css">
  <link rel="stylesheet" href="../styles/menu.css">
  <title>Cadastro de Times</title>
</head>

<body>  
  <main>
    <h1>Cadastro de Time</h1>  
    <form action="../routes/postTeam.php" method="post">

    <div id="div-inputs">
      <input type="text" name="name" id="name" placeholder="Nome"> 
      <input type="text" name="city-state" id="city-state" placeholder="Cidade estado"> 
      <input type="text" name="country" id="country" placeholder="País">
    </div>
    
    <div id="div-buttons">
      <button class="styled-button" type="submit">Cadastrar</button>
    </div>
    </form>
  </main>

  <input id="menu-hamburguer" type="checkbox" />

  <label for="menu-hamburguer">
    <div class="menu">
      <span class="hamburguer"></span>
    </div>
  </label>

  <ul>
    <li><a class="menu-link" href="listTeams.php">Times</a></li>
    <li><a class="menu-link" href="listMatches.php">Partidas</a></li>
    <li><a class="menu-link" href="formTeams.php">Cadastrar time</a></li>
    <li><a class="menu-link" href="formMatches.php">Cadastrar partida</a></li>
  </ul>
</body>
</html>