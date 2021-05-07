<?php
require_once "../../config.php";
include_once SITE_ROOT . "/data/connect.php";

spl_autoload_register(function ($class_name) {
  require_once SITE_ROOT . "/data/$class_name.php";
});

class clientRepository implements iClientRepository
{
  function save($client)
  {
    $connection = connect();

    $CPF = $client->getCPF();
    $birthDay = $client->getBirthDay();
    $birthMonth = $client->getBirthMonth();
    $birthYear = $client->getBirthYear();
    $user = $client->getUser();
    $userId = $user->getId();

    $sql = $connection->prepare("
        INSERT INTO cliente (CPF, IsContaPremium, QtdPontos, DiaNascimento, MesNascimento, AnoNascimento, IdUsuario) VALUES
        ('$CPF', false, 0, '$birthDay', '$birthMonth', '$birthYear', '$userId');
      ");

    $sql->execute();
  }
}
