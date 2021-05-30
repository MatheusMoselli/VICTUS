<?php
require_once "../../config.php";
include_once SITE_ROOT . "/data/connect.php";

spl_autoload_register(function ($class_name) {
  require_once SITE_ROOT . "/data/$class_name.php";
});

class companyRepository
{
  function save($company)
  {
    $connection = connect();

    $CNPJ = $company->getCNPJ();
    $user = $company->getUser();
    $userId = $user->getId();

    $sql = $connection->prepare("
        INSERT INTO empresa (CNPJ, IdUsuario) VALUES
        ('$CNPJ', '$userId');
      ");

    $sql->execute();
  }

  function getByUserId($userId)
  {
    $connection = connect();

    $consult = "SELECT * FROM Empresa WHERE IdUsuario = '$userId'";
    $result = $connection->query($consult);

    return $result;
  }
}
