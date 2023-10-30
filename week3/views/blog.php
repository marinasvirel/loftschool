<?php
$messages = $blogController->message_list();
?>
<h2>Блог</h2>
<ul>
  <?php foreach ($messages as $message) : ?>
    <li>
      <p style="color: green;"><?= $message['name'] ?></p>
      <p><?= $message['text'] ?></p>
      <img src="<?= $message['img'] ?>" alt="">
    </li>
  <?php endforeach; ?>
</ul>