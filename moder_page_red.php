<?php
require "connect_db.php";
$exs_con="SELECT `content` FROM `publications` WHERE `id`='1';";
$exs_conq=mysqli_query($link,$exs_con);
$text= $exs_conq->fetch_assoc();
moder($text);
function moder($text){
			echo '<html>
					<head>
  						<link rel="stylesheet" href="newsite.css">
						<meta charset="UTF-8">
					</head>
					<body class="bodybackground">
					<div class="admmod">
					<form action="moder_server.php" method="POST">
					<h2 class="zero">Страница Модератора</h2></br>
					<h5 class="zero">Название статьи</h5></br>
					<h5 class="zero">ID статьи:</h5></br>
			        <textarea cols="100" rows="50" name="text1">'.$text['content'].'</textarea>
					<p align="center"><input id="exit" type="submit" value="Изменить"></p>
					</form>
					</div>
 </body>
</html>';
}
$link->close();
?>