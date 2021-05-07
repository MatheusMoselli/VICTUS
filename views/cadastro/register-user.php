<?php
require_once "../../config.php";
require_once SITE_ROOT . "/model/client.class.php";
require_once SITE_ROOT . "/model/user.class.php";
require_once SITE_ROOT . "/services/impl/clientService.php";

$clientService = new clientService();

$client = new Client();
$user = new User();
$user->setEmail($_POST["email"]);
$user->setName($_POST["name"]);

$passwordEncrypted = password_hash($_POST["password"], PASSWORD_DEFAULT);
$user->setPassword($passwordEncrypted);

$client->setCPF($_POST["CPF"]);
$client->setBirthDay($_POST["day"]);
$client->setBirthMonth($_POST["month"]);
$client->setBirthYear($_POST["year"]);
$client->setUser($user);

$clientService->create($client);
