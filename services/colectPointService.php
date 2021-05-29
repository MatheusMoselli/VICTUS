<?php
require_once "../../config.php";

require_once SITE_ROOT . "/model/user.class.php";
require_once SITE_ROOT . "/data/colectPointRepository.php";
require_once SITE_ROOT . "/services/impl/userService.php";

class colectPointService
{
  function create($cp)
  {
    try {
      $user = $cp->getUser();

      print_r($user);
      $userService = new userService();
      $cp->setUser($userService->create($user));

      $colectPointRepository = new colectPointRepository();
      $colectPointRepository->save($cp);

      header("Location: ../login/index.html");
    } catch (Exception) {
      // Tratamento de erro
    }
  }

  function verifyIfExists($userId)
  {
    try {
      $colectPointRepository = new colectPointRepository();
      $result = $colectPointRepository->getByUserId($userId);

      if ($result->num_rows != 0) {
        return true;
      }
    } catch (Exception) {
      // code...
    }
  }
}
