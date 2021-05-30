<?php
require_once "../../config.php";
require_once SITE_ROOT . "/model/company.class.php";
require_once SITE_ROOT . "/model/user.class.php";
require_once SITE_ROOT . "/services/companyService.php";

$companyService = new companyService();

$company = new Company();
$user = new User();
$user->setEmail($_POST["email"]);
$user->setName($_POST["name"]);

$passwordEncrypted = password_hash($_POST["password"], PASSWORD_DEFAULT);
$user->setPassword($passwordEncrypted);

$company->setCNPJ($_POST["CNPJ"]);
$company->setUser($user);

$companyService->create($company);
