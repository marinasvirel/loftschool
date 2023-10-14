<?php

class Hourly extends Rate
{
  public $priceMinutes = 200 / 60;

  public function calc()
  {
    if ($this->time < 60) {
      $this->time = 60;
    }
    return ($this->time * $this->priceMinutes);
  }
}
