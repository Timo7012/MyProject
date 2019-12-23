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
$idpubl=$_POST['idpubl'];

if($_POST['sector']=='Базовый сектор'){
	$sector='publications';
}

if($_POST['sector']=='Продвинутый сектор'){
	$sector='adv_text';
}

$exs_t="SELECT `content` FROM `$sector` WHERE `idp`='$idpubl';";
$exs_tq=mysqli_query($link,$exs_t);
$text=$exs_tq->fetch_assoc();

$exs_n="SELECT `name` FROM `$sector` WHERE `idp`='$idpubl';";
$exs_nq=mysqli_query($link,$exs_n);
$textn=$exs_nq->fetch_assoc();


moder($text,$textn,$idpubl);
function moder($text,$textn,$idpubl){
			echo '<html>
					<head>
  						<link rel="stylesheet" href="newsite.css">
						<meta charset="UTF-8">
					</head>
					<body class="bodybackground">
					<div class="admmod">
					<form action="moder_server.php" method="POST">
					<h2 class="zero">Страница Модератора</h2></br>
					<h3 name="sector">'.$_POST['sector'].'</h3>
					<input type="hidden" name="sector" value="'.$_POST['sector'].'">
					<p class="zero">Название статьи:</p>
					<textarea cols="10" rows="5" name="text2">'.$textn['name'].'</textarea></br>
					<h5 class="zero">ID статьи:</h5></br>
					<span class="zero" name="idpub">'.$idpubl.'</span></br>
					<input type="hidden" name="idpub" value="'.$idpubl.'">
			        <textarea cols="100" rows="50" name="text1">'.$text['content'].'</textarea>
					<p align="center"><input id="exit" type="submit" value="Изменить"></p>
					</form>
					</div>
 </body>
</html>';
}
$link->close();
?>