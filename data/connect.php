<?php
function connect()
{
  // LOCALHOST != SERVIDOR AWARDSPACE
  // Não alterar lá!
  $host = "us-cdbr-east-04.cleardb.com";
  $user = "bbd8cf2730dde2";
  $password = "403fb06d";
  $database = "heroku_0f0d2d3ad562bfd";

  $connection = new MySQLi("$host", "$user", "$password", "$database");

  $connection->set_charset("utf8");

  if ($connection->connect_error) {
    echo "ERRO DE CONEXÃO";
    exit();
  }

  return $connection;
}
