<?php
require "connect_db.php";
$exs_con="SELECT `content` FROM `publications` WHERE `id`='1';";
$exs_conq=mysqli_query($link,$exs_con);
$text= $exs_conq->fetch_assoc();
$content= '
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="newsite.css">
	</head>
	<body>
		<h4>Статья 1</h4>'.$text['content'].'
	<p>
	</p>
	</body>
</html>';
$link->close();
?>