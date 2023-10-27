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
            $_SESSION['id'] = $last;
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

  public function auth_action()
  {
    if (isset($_POST['auth'])) {
      $user = new User();
      $row = $user->select_row("users", "email", $_POST['email']);
      if ($_POST['email'] === $row['email'] && sha1($_POST['password']) === $row['password']) {
        $_SESSION['id'] = $row['id'];
        echo "успешно id = " . $row['id'];
      } else {
        echo "Неверный логин или пароль";
      }
    }
  }
}
