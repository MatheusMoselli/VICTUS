<?php
require_once "../../config.php";

require_once SITE_ROOT . "/model/user.class.php";
require_once SITE_ROOT . "/services/iClientService.php";
require_once SITE_ROOT . "/data/impl/clientRepository.php";
require_once SITE_ROOT . "/services/impl/userService.php";

class clientService implements iClientService
{
  function create($client)
  {
    try {
      $user = $client->getUser();

      $userService = new userService();
      $client->setUser($userService->create($user));

      $clientRepository = new clientRepository();
      $clientRepository->save($client);

      header("Location: ../login/index.html");
    } catch (Exception) {
      // code...
    }
  }

  function verifyIfExists($userId)
  {
    try {
      $clientRepository = new clientRepository();
      $result = $clientRepository->getByUserId($userId);

      if ($result->num_rows != 0) {
        return true;
      }
    } catch (Exception) {
      // code...
    }
  }
}
