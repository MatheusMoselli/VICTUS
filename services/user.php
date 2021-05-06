<?php
  function getUser($email, $password, $connection) {
    $result = get($email, $password, $connection);
    $register = $result -> num_rows;
    $result_user = mysqli_fetch_assoc($result);

    if ($register == 1) {
      return $result_user;
    }
  }
?>