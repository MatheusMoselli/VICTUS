<?php
interface iUserService
{
  function login($user);
  function create($user);
  function typeOfLoggedUser($user);
}
