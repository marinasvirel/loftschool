<?php

function task1(array $arr, bool $print = false): string
{
  $str = "";
  foreach ($arr as $item) {
    if ($print === true) {
      echo implode(" ", $arr);
      break;
    } else {
      echo "<p>$item</p>";
    }
  }
  return $str;
}

function task2($operation, ...$args)
{
  $first = array_shift($args);
  foreach ($args as $item) {
    if (!is_int($item) && !is_float($item)) {
      return "Ошибка: не число";
    } elseif ($item === 0) {
      return "Не надо 0";
    } elseif (!is_string($operation)) {
      return "Ошибка: не строка";
    } elseif ($operation !== "+" && $operation !== "-" && $operation !== "*" && $operation !== "/") {
      return "Ошибка: не оператор";
    } elseif ($operation === "+") {
      return array_sum($args);
    } elseif ($operation === "*") {
      return array_product($args);
    } elseif ($operation === "-") {
      return $first -= array_sum($args);
    } elseif ($operation === "/") {
      foreach ($args as $item) {
        $result = $first /= $item;
      }
      return $result;
    }
  }
}

function task3($n, $n2)
{
  if (!is_int($n) || !is_int($n2)) {
    echo "Не число";
  } else {
    if ($n > 0 && $n < 10 && $n2 > 0 && $n2 < 10) {
      echo "<table border = 1>";
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
