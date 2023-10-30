<?php
session_start();

use controllers\MessageController;
use controllers\UserController;

spl_autoload_register(function ($class) {
  require_once "{$class}.php";
});


$userController = new UserController();
$messageController = new MessageController();


if ($_SESSION) {
  include "views/exit.php";
  include "views/message.php";
  $userController->exit();
  $messageController->send_action();
} else {
  include "views/register.php";
  include "views/auth.php";
  $userController->register_action();
  $userController->auth_action();
}

// move_uploaded_file($_FILES['img']['tmp_name'], "views/uploads/{$_FILES['img']['name']}");

// echo "<pre>";
// var_dump($_FILES['img']['tmp_name']);
