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
$typeUser = $userService->typeOfLoggedUser($result_user);

if ($result_user != null) {
  $_SESSION['idUser'] = $result_user['Id'];
  $_SESSION['name'] = $result_user['Nome'];
  $_SESSION['email'] = $result_user['Email'];

  switch ($typeUser) {
    case 1:
      header("Location: ../restricted/index-user.php");
      break;
    case 2:
      header("Location: ../restricted/index-cp.php");
      break;
    default:
      //header("Location: ./index.html");
      break;
  }
  //header("Location: ../restricted/index-user.php");
} else {
  //header("Location: ./index.html");
}
