<?php

abstract class Rate implements iRate
{
  public $time;
  public $distance;
  public $priceKm;
  public $priceMinutes;
  public $services = [];

  public function __construct($time, $distance)
  {
    $this->time = $time;
    $this->distance = $distance;
  }

  public function calc(): int
  {
    $price = ($this->time * $this->priceMinutes) + ($this->distance * $this->priceKm);
    if ($this->services) {
      foreach ($this->services as $service) {
        $service->apply($this, $price);
      }
    }
    return $price;
  }

  public function add_servise(iService $service): iRate
  {
    array_push($this->services, $service);
    return $this;
  }

  public function get_time(): int
  {
    return $this->time;
  }

  public function get_distance(): int
  {
    return $this->distance;
  }
}
