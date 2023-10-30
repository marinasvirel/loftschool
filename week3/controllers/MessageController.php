<?php

namespace controllers;

use models\Message;

class MessageController
{
  public function send_action()
  {
    $message = new Message();
    if (isset($_POST['message'])) {
      if ($_FILES) {
        move_uploaded_file($_FILES['img']['tmp_name'], "views/uploads/{$_FILES['img']['name']}");
      }
      $message->create();
      header("Location: index.php");
    }
  }
}
