<?php
  require_once "../dao/DaoSoccerMatch.php";

  $daoSoccerMatch = new DaoSoccerMatch();
  $matchList = $daoSoccerMatch->list();
  $tableRows = '';

  foreach ($matchList as $line) {
    $tableRows .= '<tr>';
    foreach ($line as $value) {
      $tableRows .= "<td>$value</td>";
    }
    $tableRows .= "<td>
                      <a href='formShots.php?match={$line['id']}'>
                        <img class='icon' src='../images/add.png' /> 
                      </a>                      
                      <a href='listShots.php?match={$line['id']}'>
                        <img class='icon' src='../images/eye.png' />
                      </a>
                    </td>";
    $tableRows .= '</tr>';
  } 
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/styles.css">
  <link rel="stylesheet" href="../styles/styledLists.css">
  <link rel="stylesheet" href="../styles/menu.css">
  <title>Lista de Partidas</title>
</head>

<body style="margin: 0; padding: 0">
  <h1>Lista de Partidas</h1>
  
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Time de Casa</th>
        <th>Gols da Casa</th>
        <th>Time de Fora</th>
        <th>Gols de Fora</th>
        <th>Data</th>
        <th>Local</th>
        <th>Lances</th>  
      </tr>
    </thead>
    
    <tbody>
      <?php echo $tableRows ?>
    </tbody>
  </table>
  <a class="styled-button" href="formMatches.php">Adicionar Partida</a>
  
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
