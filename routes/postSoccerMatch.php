<?php 

require_once "../models/SoccerMatch.php";
require_once "../dao/DaoSoccerMatch.php";

$dao = new DaoSoccerMatch();

$homeTeam = $_POST["home-team"];
$homeGoals = $_POST["home-goals"];
$outsideTeam = $_POST["outside-team"];
$outsideGoals = $_POST["outside-goals"];
$date = $_POST["date"];
$location = $_POST["location"];

$match = new SoccerMatch($homeTeam, $homeGoals, $outsideTeam, $outsideGoals, $date, $location);

if($dao->insert($match)) {
  header('location:../views/listMatches.php');
}

?>
