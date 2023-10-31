<?php
session_start();

use controllers\BlogController;
use controllers\MessageController;
use controllers\UserController;
use models\Message;
use models\User;

spl_autoload_register(function ($class) {
  require_once "{$class}.php";
});

$user = new User();
$message = new Message();
$userController = new UserController();
$messageController = new MessageController();
$blogController = new BlogController();


if ($_SESSION) {
  if ($_GET) {
    $blogController->api();
  } else {
    include "views/exit.php";
    include "views/blog.php";
    include "views/message.php";
    $userController->exit_action();
    $messageController->send_action();
  }
} else {
  include "views/register.php";
  include "views/auth.php";
  $userController->register_action();
  $userController->auth_action();
}


// echo "<pre>";
// var_dump($user->is_admin());
//var_dump($_GET);
