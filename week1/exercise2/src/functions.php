<?php

function task1(array $arr, bool $print = false): string
{
  $str = "";
  foreach ($arr as $item) {
    if ($print === true) {
      $str .= "$item ";
    } else {
      echo "<p>$item</p>";
    }
  }
  return $str;
}

function task2(string $operation, int ...$args): int
{
  if ($operation === "+") {
    $result = 0;
  } elseif ($operation === "*") {
    $result = 1;
  }

  foreach ($args as $item) {
    if ($operation === "+") {
      $result += $item;
    }
    if ($operation === "*") {
      $result *= $item;
    }
  }
  return $result;
}

function task3(int $n, int $n2)
{
  if ($n > 0 && $n < 10 && $n2 > 0 && $n2 < 10) {
    echo "<table>";
    for ($i = 1; $i <= $n; $i++) {
      echo "<tr>";
      for ($j = 1; $j <= $n2; $j++) {
        echo "<td>";
        echo $i * $j;
        echo "</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
  } else {
    echo "Число должно быть от 1 до 10";
  }
}

function task4()
{
  echo date('d.m.Y H:i');
}

function task5()
{
  echo strtotime('24.02.2016 00:00:00');
}

function task6(string $str)
{
  echo str_replace("К", "", $str);
}

function task7(string $str)
{
  echo str_replace("Две", "Три", $str);
}

function task8()
{
  echo file_get_contents("text.txt");
}
