<?php
//session_start();

use controllers\UserController;
use models\User;

spl_autoload_register(function ($class) {
  require_once "{$class}.php";
});

include "views/register.php";
include "views/auth.php";
include "views/message.php";

$user = new User();
$userController = new UserController();
$userController->register_action();
$userController->auth_action();


// $_SESSION['id'] = 1;

// $_SESSION = [];

// $_SESSION['id'] = 2;

// if ($_SESSION) {
//   echo "blog";
// } else {
//   echo "form";
// }



// echo "<pre>";
// var_dump($_POST);
