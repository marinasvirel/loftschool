<?php

namespace controllers;

use models\User;

class UserController
{
  public function register_action()
  {
    $user = new User;
    if (isset($_POST['reg'])) {
      if (!$user->check_email()) {
        if (mb_strlen($_POST['password']) >= 4) {
          if ($_POST['password'] === $_POST['password2']) {
            $last = $user->create();
            echo "Регистрация прошла успешно id = $last";
          } else {
            echo "Пароли не совпадают";
          }
        } else {
          echo "Пароль должен быть не менее 4 символов";
        }
      } else {
        echo "Пользователь с таким именем уже существует";
      }
    }
  }
}
