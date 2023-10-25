<?php

namespace controllers;

abstract class Controller
{
  public function index()
  {
    echo __METHOD__;
  }

  public function login()
  {
    echo "login";
  }

  public function register()
  {
    echo "register";
  }
}
