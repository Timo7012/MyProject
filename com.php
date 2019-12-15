<?php
session_start();
if(isset($_SESSION['login'])){
require "com_out.php";
echo '
<html>
<head>
 <link rel="stylesheet" href="newsite.css">
  <meta charset="UTF-8">
</head>
<body>
<form name="comment" action="com_server.php" method="post">
  <p>
    <label>Комментарий:</label>
    <br />
    <textarea name="text_comment" cols="30" rows="50">fjkgljflgjl</textarea>
  </p>
  <p>
    <input type="submit" value="Отправить" />
  </p>
</form>
</body>
</html>
';}
?>