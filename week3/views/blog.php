<?php

use models\Message;

$message = new Message();
$messages = $message->read();
echo "<pre>";
var_dump($message->read());
?>
