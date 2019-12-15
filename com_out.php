<?php
  require "connect_db.php";
  $result = "SELECT `text_com`,`name` FROM `com`;";
  $res = mysqli_query($link,$result);
  while ($row = $res->fetch_assoc()) {
  	echo "<h2>".$row['name']."</h2>";
  	echo "<h2>".$row['text_com']."</h2>";
  	echo '</br>';
  	echo '</br>';

  };
?>
