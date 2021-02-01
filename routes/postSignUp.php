<?php
require_once "../models/User.php";
require_once "../dao/DaoUser.php";

$username = $_POST['username'];
$password = $_POST['password'];

$user = new User($username, $password);
$dao = new DaoUser();

if ($dao->insert($user) and $dao->verifyLogin($user)) {
  session_start();
  $_SESSION['username'] = $username;
  $_SESSION['password'] = $password;
  header('location:../views/listTeams.php');  
} else {
  header('location:../views/signUp.php');
}

?>