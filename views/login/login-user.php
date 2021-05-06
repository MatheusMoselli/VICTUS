<?php
  session_start();
  include '../../data/connect.php';
  include '../../data/process.php';
  include '../../data/user.php';
  include '../../services/user.php';

  $email = $_POST['email'];
  $pass = $_POST['password'];
  $pass = base64_encode($pass);

  $result_user = getUser($email, $pass, $connection);

  if($result_user != null) {
    $_SESSION['idUser'] = $result_user['Id'];
    $_SESSION['name'] = $result_user['Nome'];
    $_SESSION['email'] = $result_user['Email'];

    header("Location: ../restricted/index.php");
  } else {
    header("Location: ../index.html");
  }
?>