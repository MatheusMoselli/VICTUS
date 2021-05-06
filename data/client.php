<?php
  function save($client, $connection) {
    $name = $client->getName();
    $email = $client->getEmail();
    $password = $client->getPassword();
    $CPF = $client->getCPF();
    $birthDay = $client->getBirthDay();
    $birthMonth = $client->getBirthMonth();
    $birthYear = $client->getBirthYear();

    $createUser = $connection -> prepare("
      INSERT INTO usuario (nome, email, senha) VALUES
      ('$name', '$email', '$password');
    ");

    $createUser->execute();

    $idUser = $createUser->insert_id;

    $createClient = $connection -> prepare("
      INSERT INTO cliente (CPF, IsContaPremium, QtdPontos, DiaNascimento, MesNascimento, AnoNascimento, IdUsuario) VALUES
      ('$CPF', false, 0, '$birthDay', '$birthMonth', '$birthYear', '$idUser');
    ");

    $createClient->execute();
  }
?>