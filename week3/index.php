<?php

use models\User;

spl_autoload_register(function ($class) {
  require_once "{$class}.php";
});

include "views/register.php";

$user = new User();
if (isset($_POST['reg'])) {
  if (mb_strlen($_POST['password']) >= 4) {
    if ($_POST['password'] === $_POST['password2']) {
      $last = $user->add_user();
      echo "Регистрация прошла успешно id = $last"; // $last выводит 0
    } else {
      echo "Пароли не совпадают";
    }
  } else {
    echo "Пароль должен быть не менее 4 символов";
  }
}
