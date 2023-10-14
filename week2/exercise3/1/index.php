<?php

require_once "src/functions.php";

$users = json_decode(file_get_contents("users.json"), true);

echo "<h3>Задание №3(1)</h3>";
echo "<h4>Количество пользователей с каждым именем в массиве</h4>";
task3($users);
echo "<h4>Средний возраст пользователей</h4>";
task4($users);
