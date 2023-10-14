<?php

require_once "iRate.php";
require_once "Rate.php";
require_once "Base.php";
require_once "Hourly.php";
require_once "Student.php";

require_once "iService.php";
require_once "Service.php";
require_once "Driver.php";
require_once "GPS.php";

echo "<h4>Базовый тариф</h4>";
$base = new Base(30, 4);
echo $base->calc();

echo "<h4>Почасовой тариф</h4>";
$hourly = new Hourly(30, 4);
echo $hourly->calc();

echo "<h4>Студенческий тариф</h4>";
$student = new Student(30, 4);
echo $student->calc();

echo "<h4>Дополнительный водитель</h4>";
$driver = new Driver();
echo $driver->calc();

echo "<h4>GPS</h4>";
$gps = new GPS(1);
echo $gps->calc();
