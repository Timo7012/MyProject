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
			show_authorization_page($_SESSION['login']);
		} else {
			unset($_SESSION['login']);
			unset($_SESSION['password']);
			echo '<html>
						<head>
							<meta charset="UTF-8">
							<link rel="stylesheet" href="newsite.css">
						</head>
						 <body>
						<div class="auth_1">
						<h1>Authorization</h1>
							<form action="main_page.php" method="POST">
								Login
								<p><input type="text" name="lg"></p>
								<p>Password</p>
								<p><input type="password" name="pw"></p>
								<input id="login" type="submit" value="Log In">
							</form>
								<p>Not registred yet?</p>
								<p><a class="a_auth" href="reg_page.php">Registration</a></p>
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
				$_SESSION['login']=(($exs_q->fetch_assoc())['login']);
				$_SESSION['password']=md5($_REQUEST['pw']);
			show_authorization_page($_SESSION['login']);
			} else {
				$exs = "SELECT `login` FROM `auth1` WHERE `login`='$lg' AND `password`='".md5($pw)."';";
				$exs_q = mysqli_query($link,$exs);
				if ( mysqli_num_rows($exs_q) ) {
					$_SESSION['login']=$_REQUEST['lg'];
					$_SESSION['password']=md5($_REQUEST['pw']);
					show_authorization_page($_SESSION['login']);
				} else {
					unset($_SESSION['login']);
					unset($_SESSION['password']);
					echo '<html>
						<head>
							<meta charset="UTF-8">
							<link rel="stylesheet" href="newsite.css">
						</head>
						 <body>
						<div class="auth_1">
						<h1>Authorization</h1>
							<form action="main_page.php" method="POST">
								Login
								<p><input type="text" name="lg"></p>
								<p>Password</p>
								<p><input type="password" name="pw"></p>
								<input id="login" type="submit" value="Log In">
							</form>
								<p>Not registred yet?</p>
								<p><a class="a_auth" href="reg_page.php">Registration</a></p>
						</div>
						 </body>
						</html>';
				}
			}
		} else {
			unset($_SESSION['login']);
			unset($_SESSION['password']);
			echo '<html>
						<head>
							<meta charset="UTF-8">
							<link rel="stylesheet" href="newsite.css">
						</head>
						 <body>
						<div class="auth_1">
						<h1>Authorization</h1>
							<form action="main_page.php" method="POST">
								Login
								<p><input type="text" name="lg"></p>
								<p>Password</p>
								<p><input type="password" name="pw"></p>
								<input id="login" type="submit" value="Log In">
							</form>
								<p>Not registred yet?</p>
								<p><a class="a_auth" href="reg_page.php">Registration</a></p>
						</div>
						 </body>
						</html>';

		}
	}

function show_authorization_page($lg){
			echo '<html>
					<head>
  						<link rel="stylesheet" href="newsite.css">
						<meta charset="UTF-8">
					</head>
					<body>
					<div class="auth_1">
					<h5 class="zero">Здравствуйте,'.$lg.'</h5>
					<p class="zero"></p>
					<form class="zero" action="deauth.php" method="POST">
					<input id="exit" type="submit" value="Выйти">
					</form>
					</div>
 </body>

</html>';
}
?>