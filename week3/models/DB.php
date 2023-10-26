<?php

namespace models;

use PDO;

trait DB
{
  public function connect()
  {
    $host = "localhost";
    $dbname = "blog";
    $username = "root";
    $password = "";

    $pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
    return $pdo;
  }
}
