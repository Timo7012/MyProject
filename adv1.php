<?php
require "connect_db.php";
require "authsys_v2.1.php";
require "ch_check.php";
require "connect_db.php";

$exs_txt="SELECT `content` FROM `adv_text` WHERE `idp`='1';";
$exs_txtq=mysqli_query($link,$exs_txt);
$text=$exs_txtq->fetch_assoc();


$exs_name="SELECT `name` FROM `adv_text` WHERE `idp`='1';";
$exs_nameq=mysqli_query($link,$exs_name);
$name=$exs_nameq->fetch_assoc();
$content='
		<h4>Статья '.$name['name'].'</h4>
		<p>'.$text['content'].'</p>
		 </br>
		 ';
?>

<html>
 <head>
  <link rel="stylesheet" href="newsite.css">
  <meta charset="UTF-8">
  <title><?php echo $name['name'];?></title>
 </head>
 <body class="bodybackground">
<h1 class="header1">Имя сайта</h1></br>
<h2 class="header2" align="center"><?php echo $name['name']; ?></h2></br>
<div class="div_button"><a href="main_page.php" id="butt1">Главная страница</a></div>
<div class="div_button"><a href="base_sector.php" id="butt1">Базовый сектор</a></div>
<div class="div_button"><a href="advanced_sector.php" id="butt">Продвинутый сектор</a></div>
<div class="div_button"><a href="news.php" align="center" id="butt">Новости</a></div>
<div class="div_button"><a href="forum.php" id="butt">Форум</a></div></br>
<div class="content">
	<?php
	echo $content;
	?>	
</div>
<div class="footer" align="bottom">Махмудов Т.Н. ИУ4-13Б</div>
 </body>
</html>