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
            header("Location: index.php");
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
        header("Location: index.php");
      } else {
        echo "Неверный логин или пароль";
      }
    }
  }

  public function exit_action()
  {
    if (isset($_POST['exit'])) {
      $_SESSION = [];
      header("Location: index.php");
    }
  }
}
