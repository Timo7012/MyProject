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

$exs_con="SELECT `name` FROM `publications`;";
$exs_conq=mysqli_query($link,$exs_con);
?>

<html>
<head>
  	<link rel="stylesheet" href="newsite.css">
	<meta charset="UTF-8">
</head>
<body class="bodybackground">
	<div class="admmod">
		<h3 align="center">Страница модератора</h3>
		<p><a class="a_sb123" href="main_page.php">Вернутся на главную страницу</a></p>
		<form action="moder_page_red.php" method="POST">				
			<select name="sector">
		  		<option>Базовый сектор</option>
		  		<option>Продвинутый сектор</option>
	 		</select>
								
			<select name="idpubl">
				<?php
		  		for($i=1;$i<256;$i++){
		  		echo '<option>'.$i.'</option>';}
		  		?>
		  	</select>
		  	<input class="a_auth" type="submit" value="Изменить">
		</form>
		
		<form action="moder_page_add.php" method="POST">
			<select name="sec">
				<option>Базовый сектор</option>
		  		<option>Продвинутый сектор</option>
			</select>
			<input class="a_auth" type="submit" value="Добавить Запись">
		</form>

	
	</div>
</body>
</html>';
