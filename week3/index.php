<?php
//session_start();

use models\User;

spl_autoload_register(function ($class) {
  require_once "{$class}.php";
});

$user = new User();

// $_SESSION['id'] = 1;

// $_SESSION = [];

// $_SESSION['id'] = 2;

// if ($_SESSION) {
//   echo "blog";
// } else {
//   echo "form";
// }

// echo "<pre>";
// var_dump();
