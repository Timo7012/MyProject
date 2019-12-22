<?php
require "connect_db.php";
if(isset($_SESSION['login'])){
$exs_p = "SELECT `priv` FROM `auth1` WHERE `login`='".$_SESSION['login']."';";
$exs_pq = mysqli_query($link,$exs_p);
$e=$exs_pq->fetch_assoc();
if ($e['priv']==2){
	echo '<html>
			<head>
			<meta charset="UTF-8">
			<link rel="stylesheet" href="newsite.css">
			</head>
 			<body>
			<p><a class="a_auth" href="admin_page.php">Admin Page</a></p>
			<p><a class="a_auth" href="moder_page.php">Moder Page</a></p>
			</body>
			</html>';
}
if ($e['priv']==1){
	echo '<html>
			<head>
			<meta charset="UTF-8">
			<link rel="stylesheet" href="newsite.css">
			</head>
 			<body>
			<p><a class="a_auth" href="moder_page.php">Moder Page</a></p>
			</body>
			</html>';
}

$link->close();
}
?>