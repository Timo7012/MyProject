<?php
require "connect_db.php";
if(isset($_SESSION['login'])){
	$exs_p = "SELECT `priv` FROM `auth1` WHERE `login`='".$_SESSION['login']."';";
	$exs_pq = mysqli_query($link,$exs_p);
	$e=$exs_pq->fetch_assoc();
	if ($e['priv']!=2){
		header("Location: main_page.php");
	}
}
?>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="newsite.css">
</head>
<body class="bodybackground">
<div class="auth_11">
	<h1>Admins page</h1>
	<p><a class="a_sb123" href="main_page.php">Вернутся на главную страницу</a></p>
	<form action="chp_server.php" method="POST">
	Login
	<select name="log">
	 <?php
	 $ea="SELECT `login` FROM `auth1`;";
	 $ea=mysqli_query($link,$ea);
	 for($i=1;$ea_q=$ea->fetch_assoc();$i++){
      echo '"<option>'.$ea_q['login'].'</option>"';};
     ?>
 	</select>
 	<br>
	<p>Priveleges
	<select name="i">
	 <?php
	 for($i=0;$i<3;$i++){ 
      echo '"<option name="i">'.$i.'</option>"';};
     ?>
    </select>
    </p><br>
	<input id="login" type="submit" value="Change">
</form>
</div>
 </body>
 </html>