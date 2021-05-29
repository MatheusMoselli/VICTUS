<?php
interface iClientRepository
{
  function save($client);
  function getByUserId($userId);
}
