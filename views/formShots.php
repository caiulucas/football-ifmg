<?php 
  require_once "../dao/DaoSoccerMatch.php";

  session_start();
  if ( (!isset($_SESSION['username']) == true) and (!isset($_SESSION['password']) == true)) {
    header('location:listMatches.php');
  }

  $daoMatch = new DaoSoccerMatch();

  $url = parse_url($_SERVER['REQUEST_URI']);
  parse_str($url['query'], $params);

  $match = $daoMatch->getById($params["match"]);
  $formatedMatch = "{$match['id']}, {$match['homeTeam']} X {$match['outsideTeam']}";

  $datetime = new DateTime($params["datetime"]);
  $formatedDatetime = $datetime->format(DateTime::ATOM);
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/styles.css">
  <link rel="stylesheet" href="../styles/formStyles.css">
  <link rel="stylesheet" href="../styles/menu.css">
  <title>Cadastro de Lance</title>
</head>

<body style="margin: 0; padding: 0"> 
  <main class="adding">
    <h1>Cadastro de Lance</h1>
    
    <form class="big-size" action="../routes/postShot.php" method="post">
      <div id="div-inputs">
        <?php 
          echo "<input type='text' id='match' name='match' readonly value='$formatedMatch'/>";
        ?>
        <input type="number" name="generator" id="generator" placeholder="Gerador">    
        <input type="datetime-local" name="schedule" id="schedule" placeholder="Horário">
        <input type="text" name="shot" id="shot" placeholder="Lance">   
        <input type="text" name="photo" id="photo" placeholder="Foto">   
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