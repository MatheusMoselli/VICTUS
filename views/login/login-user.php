<?php
session_start();
include_once '../../config.php';
include_once SITE_ROOT . "/services/impl/userService.php";
include_once SITE_ROOT . "/model/user.class.php";

$email = $_POST['email'];
$pass = $_POST['password'];

$user = new User();
$user->setEmail($email);
$user->setPassword($pass);

$userService = new userService();
$result_user = $userService->login($user);

if ($result_user != null) {
  $_SESSION['idUser'] = $result_user['Id'];
  $_SESSION['name'] = $result_user['Nome'];
  $_SESSION['email'] = $result_user['Email'];

  header("Location: ../restricted/index.php");
} else {
  header("Location: ./index.html");
}
