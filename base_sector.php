<?php
	require "authsys_v2.1.php";
	require "ch_check.php";
?>
<html>
	<head>
		<link rel="stylesheet" href="newsite.css">
  		<meta charset="UTF-8">
  		<title>Базовый сектор</title>
 	</head>
 	<body class="bodybackground">
			<h1 class="header1">ITility</h1></br>
			<h2 class="header2" align="center">Базовый сектор</h2></br>
			<div class="div_button"><a href="main_page.php" id="butt1">Главная страница</a></div>
			<div class="div_button"><a href="base_sector.php" id="butt">Базовый сектор</a></div>
			<div class="div_button"><a href="advanced_sector.php" id="butt">Продвинутый сектор</a></div>
			<div class="div_button"><a href="news.php" align="center" id="butt">Новости</a></div>
			<div class="div_button"><a href="forum.php" id="butt">Форум</a></div></br>
		<div id="footer_n">	
			<div class="content">Здесь будут статьи 
			<?php
			require "contet_maker.php";
			?>	
			</div>
		</div>	
		<div class="adv">Adv</div>
		<div class="footer" align="bottom">Махмудов Т.Н. ИУ4-13Б</div>
 	</body>
</html>