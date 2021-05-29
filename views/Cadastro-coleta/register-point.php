<?php
require_once "../../config.php";
require_once SITE_ROOT . "/model/colectPoint.class.php";
require_once SITE_ROOT . "/model/user.class.php";
require_once SITE_ROOT . "/services/colectPointService.php";

$colectPointService = new colectPointService();

$cp = new ColectPoint();
$user = new User();
$user->setEmail($_POST["email"]);
$user->setName($_POST["name"]);

$passwordEncrypted = password_hash($_POST["password"], PASSWORD_DEFAULT);
$user->setPassword($passwordEncrypted);

$cp->setCNPJ($_POST["CNPJ"]);
$cp->setLocation($_POST["location"]);
$cp->setUser($user);

$colectPointService->create($cp);
