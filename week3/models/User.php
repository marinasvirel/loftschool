<?php

namespace models;

use models\Model;

class User extends Model
{
  private $id;
  private $name;
  private $email;
  private $password;
  private $created;

  public function check_email()
  {
    return $this->check_field("users", "email", $_POST['email']);
  }

  public function create()
  {
    $db = $this->connect();
    $sql = "INSERT INTO users(`name`, email, `password`, created) VALUE(:name, :email, :password, :created)";
    $stmt = $db->prepare($sql);
    $stmt->execute([
      'name' => $_POST['name'],
      'email' => $_POST['email'],
      'password' => sha1($_POST['password']),
      'created' => date('Y-m-d H:i:s'),
    ]);
    return $db->lastInsertId();
  }
}
