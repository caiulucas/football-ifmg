<?php
  require_once '../dao/DaoShot.php';

  $url = parse_url($_SERVER['REQUEST_URI']);
  parse_str($url['query'], $params);

  $match = $params['match'];

  $daoShot = new DaoShot();
  $shotList = $daoShot->list($match);
  $tableRows = '';    

  foreach ($shotList as $line) {
    $tableRows .= '<tr>';
    foreach ($line as $key => $value) {
      if($key == 'photo') {
        $tableRows .= "<td>
                            <img class='photo' src='$value' width=100 />
                        </td>";
      } else{
        $tableRows .= "<td>$value</td>";
      }
    }
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
  <title>Lista de Lances</title>
</head>

<body style="margin: 0; padding: 0">
  <h1>Lista de Lances</h1>
  
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>ID da Partida</th>
        <th>Gerador</th>
        <th>Horário</th>
        <th>Lance</th>
        <th>Foto</th>
      </tr>
    </thead>
    
    <tbody>
      <?php echo $tableRows ?>
    </tbody>
  </table>

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
