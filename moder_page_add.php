<?php
require "connect_db.php";
session_start();
if(isset($_SESSION['login'])){
	$exs_p = "SELECT `priv` FROM `auth1` WHERE `login`='".$_SESSION['login']."';";
	$exs_pq = mysqli_query($link,$exs_p);
	$e=$exs_pq->fetch_assoc();
	if (!($e['priv']==1 or $e['priv']==2)){
		header("Location: main_page.php");
	}
}

?>

<html>
					<head>
  						<link rel="stylesheet" href="newsite.css">
						<meta charset="UTF-8">
					</head>
					<body class="bodybackground">
					<div class="admmod">
					<form action="moder_server_add.php" method="POST">
					<h2 class="zero">Страница Добавления</h2></br>
					<h3>Базовый сектор</h3>
					<p class="zero">Название статьи:</p>
					<textarea cols="10" rows="5" name="text2"></textarea></br>
			        <p class="zero">Содержание статьи статьи:</p></br>
			        <textarea cols="100" rows="50" name="text1"></textarea>
					<p align="center"><input id="exit" type="submit"  value="Добавить статью"></p>
					</form>
					</div>
 </body>
</html>
