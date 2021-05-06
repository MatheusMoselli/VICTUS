<?php
  function createClient($client, $connection) {
    save($client, $connection);
    header("Location: ../login/index.html");
  }
?>