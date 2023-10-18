<?php

interface iRate
{
  public function calc(): int;
  public function add_servise(iService $service): self;
  public function get_time(): int;
  public function get_distance(): int;
}
