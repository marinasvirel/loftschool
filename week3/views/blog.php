<?php
$messages = array_slice($blogController->message_list(), -20);
?>
<ul>
  <?php foreach ($messages as $message) : ?>
    <li>
      <p style="color: green;"><?= $message['name'] ?></p>
      <p><?= $message['text'] ?></p>
      <img src="<?= $message['img'] ?>" alt="">
      <p><?= $message['created'] ?></p>
      <hr>
    </li>
  <?php endforeach; ?>
</ul>