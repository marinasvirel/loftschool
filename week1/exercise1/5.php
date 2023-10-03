<?php

$bmw = [
  'model' => 'X5',
  'speed' => 120,
  'doors' => 5,
  'year' => '2015',
];

$toyota = [
  'model' => 'Camry',
  'speed' => 240,
  'doors' => 4,
  'year' => '2020',
];

$opel = [
  'model' => 'Crossland',
  'speed' => 150,
  'doors' => 4,
  'year' => '2018',
];

$cars = ['bmw' => $bmw, 'toyota' => $toyota, 'opel' => $opel];

foreach($cars as $key => $value){
  echo "CAR {$key} <br> {$value['model']} {$value['speed']} {$value['doors']} {$value['year']}<hr>";
}
