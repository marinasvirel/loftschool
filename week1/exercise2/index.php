<?php

require_once "src/functions.php";

$arrStr = ["первая", "вторая", "третья"];
$str1 = "Карл у Клары украл Кораллы";
$str2 = "Две бутылки лимонада";

echo "<h3>Задание №1</h3>";
echo "<h4>Каждая строка массива в отдельном параграфе</h4>";
task1($arrStr);
echo "<h4>Объединенная строка при переданном втором аргументе</h4>";
echo task1($arrStr, true);

echo "<h3>Задание №2</h3>";
echo "<h4>Сложение чисел 5, 3, 6</h4>";
echo task2("+", 5, 3, 6);
echo "<h4>Умножение чисел 5, 3, 6</h4>";
echo task2("*", 5, 3, 6);
echo "<h4>Вычитание чисел 5, 3, 6</h4>";
echo task2("-", 5, 3, 6);
echo "<h4>Деление чисел 9, 3, 3</h4>";
echo task2("/", 9, 3, 3);

echo "<h3>Задание №3</h3>";
echo "<h4>Таблица умножения с аргументами 5 и 9</h4>";
task3(5, 9);

echo "<h3>Задание №4</h3>";
echo "<h4>Текущая дата</h4>";
task4();
echo "<h4>unixtime время соответствующее 24.02.2016 00:00:00</h4>";
task5();

echo "<h3>Задание №5</h3>";
echo "<h4>Удаление заглавных букв из строки</h4>";
task6($str1);
echo "<h4>Замена слова в строке</h4>";
task7($str2);

echo "<h3>Задание №6</h3>";
echo "<h4>Чтение текстового файла</h4>";
task8();
echo "<br>";
