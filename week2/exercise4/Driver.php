<?php

class Driver implements iService
{
  public $price;

  public function __construct($price)
  {
    $this->price = $price;
  }

  public function apply(iRate $rate, &$price)
  {
    $price += $this->price;
  }
}
