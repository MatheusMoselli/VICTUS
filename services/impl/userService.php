<?php
include_once "../../config.php";
include_once SITE_ROOT . "/services/iUserService.php";
include_once SITE_ROOT . "/services/impl/clientService.php";
include_once SITE_ROOT . "/services/colectPointService.php";
include_once SITE_ROOT . "/services/companyService.php";
include_once SITE_ROOT . "/data/impl/userRepository.php";

class userService implements iUserService
{
  function login($user)
  {
    $userRepository = new userRepository();

    $result = $userRepository->login($user);
    $register = $result->num_rows;
    $result_user = mysqli_fetch_assoc($result);

    $dbPassword = $result_user['Senha'];
    $isPasswordCorrect = password_verify($user->getPassword(), $dbPassword);

    if ($isPasswordCorrect) {
      if ($register == 1) {
        return $result_user;
      }
    }
    return;
  }

  function create($user)
  {
    $userRepository = new userRepository();
    $id = $userRepository->create($user);
    $user->setId($id);
    return $user;
  }

  function typeOfLoggedUser($result_user)
  {
    $clientService = new clientService();
    $colectPointService = new colectPointService();
    $companyService = new companyService();

    $id = $result_user['Id'];

    $isClient = $clientService->verifyIfExists($id);

    if ($isClient) {
      return 1;
    }


    $isCp = $colectPointService->verifyIfExists($id);

    if ($isCp) {
      return 2;
    }

    $isCompany = $companyService->verifyIfExists($id);

    if ($isCompany) {
      return 3;
    }

    return;
  }
}
