<?php

class Hourly extends Rate
{
  public $priceKm = 0;
  public $priceMinutes = 200 / 60;

  public function __construct($time, $distance)
  {
    parent::__construct($time, $distance);
    $this->time = $this->time - $this->time % 60 + 60;
  }
}
