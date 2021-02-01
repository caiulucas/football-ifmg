<?php
    require_once '../dao/DaoTeam.php';

    $daoTeam = new DaoTeam();
  ?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/styles.css">
  <link rel="stylesheet" href="../styles/styledLists.css">
  <link rel="stylesheet" href="../styles/menu.css">
  <title>Lista de Times</title>
</head>

<body>
  <h1>Lista de Times</h1>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Cidade/Estado</th>
        <th>País</th>
      </tr>
    </thead>
    
    <tbody>
      <?php
        $teamList = $daoTeam->list();

        foreach ($teamList as $line) {
          echo '<tr>';
          foreach ($line as $value) {
            echo "<td>$value</td>";
          }
          echo '</tr>';
        } 
      ?>
    </tbody>
  </table>

  <a class="styled-button" href="formTeams.php">Adicionar Time</a>

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
