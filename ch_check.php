<?php
$exs_p = "SELECT `priv` FROM `auth1` WHERE `email`='$lg' AND `password`='".md5($pw)."';";
$exs_pq = mysqli_query($link,$exs_p);
if ($exs_pq==2)
{
	echo '<html>
			<head>
			<meta charset="UTF-8">
			<link rel="stylesheet" href="newsite.css">
			</head>
 			<body>
			<p><a class="a_auth" href="admin_page.php">Admin Page</a></p>
			</body>
			</html>';


}
if ($exs_pq==1)
{

}
?>