<?php
  require_once '../../model/client.class.php';
  include '../../data/connect.php';
  include '../../data/client.php';
  include '../../services/client.php';

  $client = new Client();
  $client->setEmail($_POST["email"]);
  $client->setName($_POST["name"]);
  $client->setPassword($_POST["password"]);
  $client->setCPF($_POST["CPF"]);
  $client->setBirthDay($_POST["day"]);
  $client->setBirthMonth($_POST["month"]);
  $client->setBirthYear($_POST["year"]);

  createClient($client, $connection);
?>