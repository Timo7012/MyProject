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
					
					</form>
					</div>
 </body>
</html>';
}
$link->close();
?>