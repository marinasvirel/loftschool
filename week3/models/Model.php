<?php

namespace models;

abstract class Model
{
  use DB;

  public function select_all($table)
  {
    $db = $this->connect();
    $sql = "SELECT * FROM $table";
    $stmt = $db->query($sql);
    return $stmt->fetchAll($db::FETCH_ASSOC);
  }

  public function select_row($table, $column, $value)
  {
    $db = $this->connect();
    $sql = "SELECT * FROM $table WHERE $column = :column";
    $stmt = $db->prepare($sql);
    $stmt->execute(['column' => $value]);
    return $stmt->fetch($db::FETCH_ASSOC);
  }

  public function check_field($table, $column, $value)
  {
    $db = $this->connect();
    $sql = "SELECT $column FROM $table WHERE $column = :column";
    $stmt = $db->prepare($sql);
    $stmt->execute(['column' => $value]);
    return $stmt->fetch($db::FETCH_ASSOC);
  }

  public function delete_row($table, $row, $value)
  {
    $db = $this->connect();
    $sql = "DELETE FROM $table WHERE $row = $value";
    $stmt = $db->query($sql);
    return $stmt;
  }
}
