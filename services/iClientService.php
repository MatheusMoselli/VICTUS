<?php
interface iClientService
{
  function create($client);
  function verifyIfExists($userId);
}
