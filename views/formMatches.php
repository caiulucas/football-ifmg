<?php 
  require_once "../models/Team.php";
  require_once "../dao/DaoTeam.php";

  session_start();
  if ( (!isset($_SESSION['username']) == true) and (!isset($_SESSION['password']) == true)) {
    header('location:listMatches.php');
  }

  $daoTeam = new DaoTeam();
  $teamList = $daoTeam->list();
  $options = '';

  foreach($teamList as $line) {
    $options .= "<option value='{$line['id']}'>{$line['name']}</option>";
  }
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/styles.css">
  <link rel="stylesheet" href="../styles/formStyles.css">
  <link rel="stylesheet" href="../styles/menu.css">
  <title>Cadastro de Partida</title>
</head>
<body style="margin: 0; padding: 0">
  <main class="adding">
    <h1>Cadastro de Partida</h1> 
    <form class="big-size" action="../routes/postSoccerMatch.php" method="post">
      <div id="div-inputs">
        <div class="select">
          <select name="home-team" id="home-team">
            <option class="default-option" value="" selected>Time de casa</option>
            <?php echo $options; ?>
          </select>
        </div>

        <input type="number" name ="home-goals" id="home-goals" placeholder="Gols do time de casa">
        <div class="select">
          <select name="outside-team" id="outside-team">
            <option class="default-option" value="" selected>Time de Fora</option>
            <?php echo $options; ?>
          </select>
        </div>

        <input type="number" name="outside-goals" id="outside-goals" placeholder="Gols do time de fora">
        <input type="datetime-local" name="date" id="date"> 
        <input type="text" name="location" id="location" placeholder="Local">
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