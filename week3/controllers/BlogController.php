<?php

namespace controllers;

use models\Message;
use models\User;

class BlogController
{
  public function message_list(): array
  {
    $arr = [];
    $mess = new Message();
    $messages = $mess->read();
    if ($messages) {
      foreach ($messages as $message) {
        $user = new User();
        $row = $user->select_row("users", "id", $message['user_id']);
        $name = $row['name'];
        $img = "views/uploads/{$message['img']}";
        $arr[] = [
          'id' => $message['id'],
          'name' => $name,
          'text' => $message['text'],
          'img' => $img,
          'created' => $message['created'],
        ];
      }
    } else {
      echo "Сообщений нет";
    }
    return $arr;
  }
}
