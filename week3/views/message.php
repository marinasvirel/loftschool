<form action="index.php" method="post">
  <button name="exit">Выйти</button>
</form>

<form action="index.php" method="post" enctype="multipart/form-data">
  <textarea name="text" id="" cols="30" rows="10" placeholder="Сообщение" required></textarea>
  <input type="file" style="display: block;" name="img">
  <button name="message">Отправить сообщение</button>
</form>