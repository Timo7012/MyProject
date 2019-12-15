<?php
  require "connect_db.php";
  $result = "SELECT `text_com` FROM `com` WHERE `name`='Тимур'"; //Вытаскиваем все комментарии для данной страницы
  $res = mysqli_query($link,$result);
  echo '<ol>';
  while ($row = $res->fetch_assoc()) {
  	echo "<li>".$row['text_com']."</li>";
  }
  echo '</ol>';
  echo "lololo";
?>
