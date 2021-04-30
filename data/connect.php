<?php
  $host = "fdb20.awardspace.net";
  $user = "3827799_victus";
  $password = "5NG:*}L;3Dw?qR?x";
  $database = "3827799_victus";

  $connection = new MySQLi("$host", "$user", "$password", "$database");

  $connection -> set_charset("utf8");

  if ($connection -> connect_error) {
    echo "ERRO DE CONEXÃO";
} else {
    echo "CONEXAO BEM SUCEDIDA";
}
?>