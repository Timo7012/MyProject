<?php
  session_start();
  require "connect_db.php";
  $text_comment = $_POST["text_comment"];
  $text_comment = htmlspecialchars($text_comment);
  $name=$_SESSION['login'];
  $com ="INSERT INTO `com` (`name`,`text_com`) VALUES ('$name','$text_comment');";
  $com_q = mysqli_query($link,$com);
  header("Location: com.php");
?>