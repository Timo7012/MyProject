<?php
require "authsys_v2.1.php";
require "connect_db.php";
?>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="newsite.css">
</head>
<body class="bodybackground">
<div class="auth_1">
	<h1>Admins page</h1>
	<form action="chp_server.php" method="POST">
	Login
	<select name="log">
	 <?php
	 for($i=1;$i<256;$i++){
	 $exs_a="SELECT `login` FROM `auth1` WHERE `id`='$i';";
	 $exs_aq=mysqli_query($link,$exs_a);
	 $ea = $exs_aq->fetch_assoc();
      echo '"<option>'.$ea['login'].'</option>"';};
     ?>
 	</select>
	<p>Priv</p>
	<select name="i">
	 <?php
	 for($i=0;$i<3;$i++){ 
      echo '"<option name="i">'.$i.'</option>"';};
     ?>
    </select>
	<input id="login" type="submit" value="Change">
</form>
</div>
 </body>
 </html>