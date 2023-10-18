<?php

interface iService
{
  public function apply(iRate $rate, &$price);
}
