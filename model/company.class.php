<?php
class Company
{
  private $id;
  private $CNPJ;
  private $user;

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getCNPJ()
  {
    return $this->CNPJ;
  }

  public function setCNPJ($CNPJ)
  {
    $this->CNPJ = $CNPJ;
  }

  public function getUser()
  {
    return $this->user;
  }

  public function setUser($user)
  {
    $this->user = $user;
  }
}
