<?php

namespace models;

class Message extends Model
{
  public $id;
  public $user_id;
  public $text;
  public $created;

  public function get_all_messages()
  {
    return $this->get_all("messages");
  }
}
