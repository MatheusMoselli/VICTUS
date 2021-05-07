<?php
  interface iUserRepository {
    function login($user);
    function create($user);
  }
