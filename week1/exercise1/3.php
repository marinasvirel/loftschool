<?php

$age = 30;

if ($age >= 18 && $age <= 65) {
  echo "Вам еще работать и работать";
} elseif ($age > 65) {
  echo "Вам пора на пенсию";
} elseif ($age < 1) {
  echo "Неизвестный возраст";
} elseif ($age < 18) {
  echo "Вам ещё рано работать";
}
