<?php

require_once "iRate.php";
require_once "Rate.php";
require_once "Base.php";
require_once "Hourly.php";
require_once "Student.php";

require_once "iService.php";
require_once "Driver.php";
require_once "GPS.php";

echo "Тариф базовый, подключена услуга GPG и дополнительный водитель<br>";
$base = new Base(60, 5);
$base->add_servise(new GPS(15));
$base->add_servise(new Driver(100));
echo $base->calc();

echo "<br>";
echo "<br>";

echo "Тариф студенческий, подключена услуга GPG и дополнительный водитель<br>";
$student = new Student(60, 5);
$student->add_servise(new GPS(15));
$student->add_servise(new Driver(100));
echo $student->calc();

echo "<br>";
echo "<br>";

echo "Тариф почасовой <br>";
$hourly = new Hourly(61, 5);
echo $hourly->calc();
