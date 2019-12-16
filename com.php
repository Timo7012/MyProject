<?php
if(isset($_SESSION['login'])){
require "com_out.php";
echo '
<html>
<head>
 <link rel="stylesheet" href="newsite.css">
  <meta charset="UTF-8">
</head>
<body>
<h2>Вы зашли как '.$_SESSION['login'].'</h2>
<form name="comment" action="com_server.php" method="post">
  <p>
    <label>Комментарий:</label>
    <br />
    <textarea name="text_comment" cols="30" rows="50"></textarea>
  </p>
  <p>
    <input type="submit" value="Отправить" />
  </p>
</form>
</body>
</html>
';}
?>