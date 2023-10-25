<?php

namespace models;

use PDO;

abstract class Model
{
  use DB;

  public function get_all($table)
  {
    $sql = "SELECT * FROM $table";
    $stmt = $this->db_connect()->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
