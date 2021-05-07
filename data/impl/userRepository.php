<?php
require_once "../../config.php";
require_once SITE_ROOT . "/data/iUserRepository.php";
include_once SITE_ROOT . "/data/connect.php";

class userRepository implements iUserRepository
{
  function login($user)
  {
    $connection = connect();

    $email = $user->getEmail();

    $consult = "SELECT * FROM usuario WHERE email = '$email'";
    $result = $connection->query($consult);

    return $result;
  }

  function create($user)
  {
    $connection = connect();

    $name = $user->getName();
    $password = $user->getPassword();
    $email = $user->getEmail();

    $sql = $connection->prepare("
      INSERT INTO usuario (nome, email, senha) VALUES
      ('$name', '$email', '$password');
    ");

    $sql->execute();

    $id = $sql->insert_id;
    return $id;
  }
}
