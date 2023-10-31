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
        $admin = $user->is_admin();
        $name = $row['name'];
        $img = "views/uploads/{$message['img']}";
        $arr[] = [
          'id' => $message['id'],
          'user_id' => $message['user_id'],
          'name' => $name,
          'text' => $message['text'],
          'img' => $img,
          'created' => $message['created'],
          'admin' => $admin,
        ];
      }
    } else {
      echo "Сообщений нет";
    }
    return $arr;
  }

  public function api()
  {
    $mess = new Message();
    $user_id = $_GET['user_id'] ?? null;
    $message_id_del = $_GET['message_id_del'] ?? null;
    if (isset($user_id)) {
      $arr = [];
      $list = $this->message_list();
      foreach ($list as $item) {
        if ($item['user_id'] == $user_id) {
          $arr[] = $item;
        }
      }
      echo json_encode(array_slice($arr, -20), JSON_UNESCAPED_UNICODE);
    }
    if (isset($message_id_del)) {
      $mess->delete_row("messages", "id", $message_id_del);
      header("Location: index.php");
    }
  }
}
