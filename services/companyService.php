<?php
require_once "../../config.php";

require_once SITE_ROOT . "/model/user.class.php";
require_once SITE_ROOT . "/data/companyRepository.php";
require_once SITE_ROOT . "/services/impl/userService.php";

class companyService
{
  function create($company)
  {
    try {
      $user = $company->getUser();

      $userService = new userService();
      $company->setUser($userService->create($user));

      $colectPointRepository = new companyRepository();
      $colectPointRepository->save($company);

      header("Location: ../login/index.html");
    } catch (Exception) {
      // code ...
    }
  }

  function verifyIfExists($userId)
  {
    try {
      $companyRepository = new companyRepository();
      $result = $companyRepository->getByUserId($userId);

      if ($result->num_rows != 0) {
        return true;
      }
    } catch (Exception) {
      // code...
    }
  }
}
