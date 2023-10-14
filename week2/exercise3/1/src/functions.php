<?php

function task1(): array
{
  $arr = [];
  $names = ['Петя' => 0, 'Вася' => 0, 'Света' => 0, 'Ира' => 0, 'Маша' => 0,];
  for ($i = 1; $i <= 50; $i++) {
    $arr[$i] = ['id' => $i, 'name' => array_rand($names), 'age' => mt_rand(18, 45)];
  }
  return $arr;
}

function task2(array $arr, string $fileName)
{
  $fileName = "{$fileName}.json";
  $json = json_encode($arr, JSON_UNESCAPED_UNICODE);
  file_put_contents($fileName, $json);
}

function task3($arr)
{
  foreach ($arr as $item) {
    $names[] = $item['name'];
  }
  $count = array_count_values($names);
  foreach ($count as $key => $value) {
    $countStr[] = "$key: $value";
  }
  echo implode(", ", $countStr);
}

function task4($arr)
{
  foreach ($arr as $item) {
    $ages[] = $item['age'];
  }
  echo array_sum($ages) / count($ages);
}
