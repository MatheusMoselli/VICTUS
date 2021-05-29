<?php
require_once "../../config.php";
include_once SITE_ROOT . "/data/connect.php";

spl_autoload_register(function ($class_name) {
  require_once SITE_ROOT . "/data/$class_name.php";
});

class colectPointRepository
{
  function save($cp)
  {
    $connection = connect();

    $CNPJ = $cp->getCNPJ();
    $location = $cp->getLocation();
    $user = $cp->getUser();
    $userId = $user->getId();

    $sql = $connection->prepare("
        INSERT INTO pontocoleta (CNPJ, Localizacao, IdUsuario) VALUES
        ('$CNPJ', '$location', '$userId');
      ");

    $sql->execute();
  }

  function getByUserId($userId)
  {
    $connection = connect();

    $consult = "SELECT * FROM PontoColeta WHERE IdUsuario = '$userId'";
    $result = $connection->query($consult);

    return $result;
  }
}
