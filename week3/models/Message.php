<?php

namespace models;

class Message extends Model
{
  private $id;
  private $user_id;
  private $text;
  private $img;
  private $created;

  public function create()
  {
    $db = $this->connect();
    $sql = "INSERT INTO messages(user_id, `text`, img, created) VALUE(:user_id, :text, :img, :created)";
    $stmt = $db->prepare($sql);
    $stmt->execute([
      'user_id' => $_SESSION['id'],
      'text' => $_POST['text'],
      'img' => $_FILES['img']['name'],
      'created' => date('Y-m-d H:i:s'),
    ]);
  }

  public function read()
  {
    return $this->select_all("messages");
  }
}
