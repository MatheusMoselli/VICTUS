<?php
  // LOCALHOST != SERVIDOR AWARDSPACE
  // Não alterar lá!
  $host = "localhost";
  $user = "root";
  $password = "";
  $database = "victus";

  $connection = new MySQLi("$host", "$user", "$password", "$database");

  $connection -> set_charset("utf8");

  if ($connection -> connect_error) {
    echo "ERRO DE CONEXÃO";
    exit();
}
?>