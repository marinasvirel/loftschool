<?php
$messages = array_slice($blogController->message_list(), -20);
?>
<ul>
  <?php foreach ($messages as $message) : ?>
    <li>
      <a href="?user_id=<?= $message['user_id'] ?>" target="_blank">
        <p style="color: green;"><?= $message['name'] ?></p>
      </a>
      <p><?= $message['text'] ?></p>
      <img src="<?= $message['img'] ?>" alt="">
      <p><?= $message['created'] ?></p>
    </li>
    <?php if ($message['admin']) : ?>
      <a href="?message_id_del=<?= $message['id'] ?>">Удалить</a>
    <?php endif; ?>
    <hr>
  <?php endforeach; ?>
</ul>