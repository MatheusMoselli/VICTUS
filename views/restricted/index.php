<?php
  session_start();

  if (
    (!isset($_SESSION['idUser']) == true) &&
    (!isset($_SESSION['name']) == true) &&
    (!isset($_SESSION['email']) == true)
  ) {
    unset($_SESSION['idUser']);
    unset($_SESSION['name']);
    unset($_SESSION['password']);
    header("Location: ../index.html");
  }
?>

<h1>bem-vindo, <?php echo $_SESSION['name']?></h1>