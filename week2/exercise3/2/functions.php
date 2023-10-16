<?php

function get_user($pdo, $email)
{
  $sql = "SELECT * FROM users WHERE email = :email";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(['email' => $email]);
  return $stmt->fetch(PDO::FETCH_ASSOC);
}

function add_user($pdo, $email)
{
  $sql = "INSERT INTO users(email) VALUE(:email)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(['email' => $email]);
  return $pdo->lastInsertId();
}

function add_order($pdo, $user_id, $address)
{
  $sql = "INSERT INTO orders(user_id, `address`, created_at) VALUE(:user_id, :address, :created_at)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([
    'user_id' => $user_id,
    'address' => $address,
    'created_at' => date('Y-m-d H:i:s'),
  ]);
  return $pdo->lastInsertId();
}

function inc_order($pdo, $user_id){
  $sql = "UPDATE users SET orders_count = orders_count +1 WHERE id = $user_id";
  $pdo->query($sql);
}
