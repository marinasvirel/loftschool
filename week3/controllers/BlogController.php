<?php

namespace controllers;

use models\Message;
use models\User;

class BlogController
{
  public function message_list(): array
  {
    $mess = new Message();
    $messages = $mess->read();
    if ($messages) {
      foreach ($messages as $message) {
        $user = new User();
        $row = $user->select_row("users", "id", $message['user_id']);
        $name = $row['name'];
        $img = "views/uploads/{$message['img']}";
        $arr[] = [
          'name' => $name,
          'img' => $img,
          'text' => $message['text'],
        ];
      }
    } else {
      echo "Сообщений нет";
    }
    return $arr;
  }
}
