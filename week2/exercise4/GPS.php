<?php

class GPS implements iService
{
  public $priceHour;

  public function __construct($priceHour)
  {
    $this->priceHour = $priceHour;
  }

  public function apply(iRate $rate, &$price)
  {
    $hours = ceil($rate->get_time() / 60);
    $price += $this->priceHour * $hours;
  }
}
