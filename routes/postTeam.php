<?php

require_once '../models/Team.php';
require_once '../dao/DaoTeam.php';

$dao = new DaoTeam();

$name = $_POST['name'];
$cityState = $_POST['city-state'];
$country = $_POST['country'];

$team = new Team($name, $cityState, $country);
if($dao->insert($team)) {
  header('location:../views/listTeams.php');
}

?>