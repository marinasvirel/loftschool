<?php

class GPS extends Service
{
  public $hours;
  public $price = 15;

  public function __construct($hours)
  {
    $this->hours = $hours;
  }

  public function calc()
  {
    return $this->price * $this->hours;
  }
}
