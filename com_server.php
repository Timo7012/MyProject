<?php
  require "connect_db.php";
  $name = $_POST["name"];
  $text_comment = $_POST["text_comment"];
  $name = htmlspecialchars($name);// Преобразуем спецсимволы в HTML-сущности
  $text_comment = htmlspecialchars($text_comment);// Преобразуем спецсимволы в HTML-сущности
  $com ="INSERT INTO `com` (`name`,`text_com`) VALUES ('$name','$text_comment');";
  $com_q = mysqli_query($link,$com);// Добавляем комментарий в таблицу
  header("Location: com_test_out.php");// Делаем реридект обратно
?>