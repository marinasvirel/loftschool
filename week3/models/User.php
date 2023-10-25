<?php

namespace models;

class User extends Model
{
  public $id;
  public $name;
  public $email;
  public $password;
  public $created;

  public function get_all_users()
  {
    return $this->get_all("users");
  }

  public function add_user()
  {
    $sql = "INSERT INTO users(`name`, email, `password`, created) VALUE(:name, :email, :password, :created)";
    $stmt = $this->db_connect()->prepare($sql);
    $stmt->execute([
      'name' => $_POST['name'],
      'email' => $_POST['email'],
      'password' => sha1($_POST['password']),
      'created' => date('Y-m-d H:i:s'),
    ]);
    return $this->db_connect()->lastInsertId(); // выводит 0
  }
}
