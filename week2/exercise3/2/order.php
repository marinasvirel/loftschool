<?php

require_once "db.php";
require_once "functions.php";

$address = implode(", ", array_filter([$_POST['street'], $_POST['home'], $_POST['part'], $_POST['floor']]));
$email = $_POST['email'];
$user = get_user($pdo, $email);

if($user){
  $user_id = $user['id'];
  inc_order($pdo, $user_id);
} else {
  $user_id = add_user($pdo, $email);
}

$orderId = add_order($pdo, $user_id, $address);

echo "
Спасибо, ваш заказ будет доставлен по адресу: $address <br>
Номер вашего заказа: $orderId <br>
Это ваш {$user['orders_count']} заказ!
";
