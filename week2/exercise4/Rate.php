<?php

abstract class Rate implements iRate
{
  public $time;
  public $distance;
  public $priceKm;
  public $priceMinutes;

  public function __construct($time, $distance)
  {
    $this->time = $time;
    $this->distance = $distance;
  }

  public function calc()
  {
    return ($this->time * $this->priceMinutes) + ($this->distance * $this->priceKm);
  }
}
