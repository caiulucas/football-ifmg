<?php 

require_once '../models/Shot.php';
require_once '../dao/DaoShot.php';

$dao = new DaoShot();

$match = substr($_POST['match'], 0, 1);
$generator = $_POST['generator'];
$schedule = $_POST['schedule'];
$shot = $_POST['shot'];
$photo = $_POST['photo'];

$shot = new Shot($match, $generator, $schedule, $shot, $photo);

if($dao->insert($shot)) {
  header('location:../views/listMatches.php');
}

?>