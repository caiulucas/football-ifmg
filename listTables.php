<?php 
  require_once './dao/DaoTeam.php';
  require_once './dao/DaoSoccerMatch.php';
  require_once './dao/DaoShot.php';

  $daoTeam = new DaoTeam();
  $daoSoccerMatch = new DaoSoccerMatch();
  $daoShot = new DaoShot();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/listsStyles.css">
  <title>Listing Every Single Data</title>
</head>
<body>
  <main>
    <div>
      <h3>Times</h3>
      <pre>
      <?php print_r($daoTeam->list()) ?>
      </pre>
    </div>
    <div>
      <h3>Prtidas</h3>
      <pre>
      <?php print_r($daoSoccerMatch->list()) ?>
      </pre>
    </div>
    <div>
      <h3>Lances</h3>
      <pre>
      <?php print_r($daoShot->list()) ?>
      </pre>
    </div>
  </main>
</body>
</html>