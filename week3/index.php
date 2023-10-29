<?php
session_start();

use controllers\UserController;

spl_autoload_register(function ($class) {
  require_once "{$class}.php";
});


$userController = new UserController();


if ($_SESSION) {
  include "views/message.php";
  $userController->exit();
} else {
  include "views/register.php";
  include "views/auth.php";
  $userController->register_action();
  $userController->auth_action();
}



// echo "<pre>";
// var_dump($_SESSION);
