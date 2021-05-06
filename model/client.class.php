<?php
  include 'user.class.php';

  class Client extends User{
    private $id;
    private $CPF;
    private $birthDay;
    private $birthMonth;
    private $birthYear;

    public function getId() {
      return $this->id;
    }

    public function setId($id) {
      $this->id = $id;
    }

    public function getCPF() {
      return $this->CPF;
    }

    public function setCPF($CPF) {
      $this->CPF = $CPF;
    }

    public function getBirthDay() {
      return $this->birthDay;
    }

    public function setBirthDay($birthDay) {
      $this->birthDay = $birthDay;
    }

    public function getBirthMonth() {
      return $this->birthMonth;
    }

    public function setBirthMonth($birthMonth) {
      $this->birthMonth = $birthMonth;
    }

    public function getBirthYear() {
      return $this->birthYear;
    }

    public function setBirthYear($birthYear) {
      $this->birthYear = $birthYear;
    }
  }
?>