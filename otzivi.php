<?php
session_start();
if (isset($_SESSION['login'])){}
else{
	echo '<h5>You need to be authorized.Go to Forum`s page to authorized</h5>
 			<a href="forum.php">Forum`s Page</a>
 	';
 	exit();
 }
?>
<html>
 <head>
  <link rel="stylesheet" href="newsite.css">
  <meta charset="UTF-8">
  <title>Отзывы</title>
 </head>
 <body>
 <h3 class="header2">Вы можете оставить здесь отзыв</h3></br>

	<?php
	require "com.php";
	?>

 </body>
 </html>