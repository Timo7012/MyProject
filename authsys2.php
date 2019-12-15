<?php
	require "connect_db.php";
	session_start();
	if(isset($_SESSION['login'])){
		$lg=stripslashes($_SESSION['login']);
		$lg=mysqli_real_escape_string($link,$lg);
		$pw=stripslashes($_SESSION['password']);
		$pw=mysqli_real_escape_string($link,$pw);
		$exs = "SELECT `login` FROM `auth1` WHERE `email`='$lg' AND `password`='".md5($pw)."';";
		$exs_q = mysqli_query($link,$exs);
		if(mysqli_num_rows($exs_q)) {
			echo '
				<html>
					<head>
  						<link rel="stylesheet" href="newsite.css">

						<meta charset="UTF-8">
					</head>
					<body>
					<h5 class="auth">Здравствуйте,'.$lg.'</h5>
					</body>
					</html>
					';
		} else {
			unset($_SESSION['login']);
			unset($_SESSION['password']);
			echo '<html>
				<head>
				<meta charset="UTF-8">
				<link rel="stylesheet" href="newsite.css">
				</head>
				 <body>
				<h1 align="center">Authorization</h1>
				<div class="auth">
					<form action="main_page.php" method="POST">
						Login
						<p><input type="text" name="lg"></p>
						<p>Password</p>
						<input type="password" name="pw">
						<p><input type="submit" value="Log In"></p>
					</form>
						<p>Not registred yet?<a href="registry.php">Registration</a></p>
				</div>
				</body>
				</html>';}

	} else {
		if ( isset($_REQUEST['lg']) ) {
			$lg=stripslashes($_REQUEST['lg']);
			$lg=mysqli_real_escape_string($link,$lg);
			$pw=stripslashes($_REQUEST['pw']);
			$pw=mysqli_real_escape_string($link,$pw);
			$exs = "SELECT `login` FROM `auth1` WHERE `email`='$lg' AND `password`='".md5($pw)."';";
			$exs_q = mysqli_query($link,$exs);
			if ( mysqli_num_rows($exs_q) ) {
				print_r($exs_q);
				$_SESSION['login']='';//debug this shit
				$_SESSION['password']=md5($_REQUEST['pw']);
				echo '
				<html>
					<head>
  						<link rel="stylesheet" href="newsite.css">

						<meta charset="UTF-8">
					</head>
					<body>
					<h5 class="auth">Здравствуйте,'.$lg.'</h5>
					</body>
					</html>
					';
		
			} else {
				$exs = "SELECT `login` FROM `auth1` WHERE `login`='$lg' AND `password`='".md5($pw)."';";
				$exs_q = mysqli_query($link,$exs);
				if ( mysqli_num_rows($exs_q) ) {
					$_SESSION['login']=$_REQUEST['lg'];
					$_SESSION['password']=md5($_REQUEST['pw']);
					echo '
				<html>
					<head>
  						<link rel="stylesheet" href="newsite.css">

						<meta charset="UTF-8">
					</head>
					<body>
					<h5 class="auth">Здравствуйте,'.$lg.'</h5>
					</body>
					</html>
					';
		
				} else {
					unset($_SESSION['login']);
					unset($_SESSION['password']);
					echo '<html>
						<head>
							<meta charset="UTF-8">
							<link rel="stylesheet" href="newsite.css">
						</head>
						 <body>
						<h1 align="center">Authorization</h1>
						<div class="auth">
							<form action="main_page.php" method="POST">
								Login
								<p><input type="text" name="lg"></p>
								<p>Password</p>
								<input type="password" name="pw">
								<p><input type="submit" value="Log In"></p>
							</form>
								<p>Not registred yet?<a href="registry.php">Registration</a></p>
						</div>
						 </body>
						</html>';
				}
			}
		}
	}
?>