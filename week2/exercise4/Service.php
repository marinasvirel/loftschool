<?php

abstract class Service implements iService
{
  public $price;

  public function calc()
  {
    return $this->price;
  }
}
