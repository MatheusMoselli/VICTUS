<?php
  function get($email, $password, $connection) {
      $consult = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$password'";
      $result = $connection -> query($consult);
  
      return $result;
  }
?>