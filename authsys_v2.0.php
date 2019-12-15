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
function show_authorization_page($lg){
			echo '<html>
					<head>

  						<link rel="stylesheet" href="newsite.css">

						<meta charset="UTF-8">
					</head>
					<body class="bodybackground">
					<h5 class="auth">Здравствуйте,'.$lg.'</h5>
<h1 class="header1">Имя сайта</h1></br>

<h2 class="header2" align="center">Главная страница</h2></br>


<div class="div_button"><a href="main_page.php" id="butt1">Главная страница</a></div>



<div class="div_button"><a href="base_sector.php" id="butt1">Базовый сектор</a></div>



<div class="div_button"><a href="advanced_sector.php" id="butt">Продвинутый сектор</a></div>



<div class="div_button"><a href="news.php" align="center" id="butt">Новости</a></div>

<div class="div_button"><a href="" id="butt">Форум</a></div></br>



<div class="content">Content</div>



<div class="adv">Adv</div>



<div class="footer" align="bottom">Махмудов Т.Н. ИУ4-13Б</div>



 </body>

</html>';
}
?>