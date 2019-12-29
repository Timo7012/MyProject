<?php
require "connect_db.php";
require "authsys_v2.1.php";
require "ch_check.php";
require "connect_db.php";
parse_str(parse_url($_SERVER['REQUEST_URI'],PHP_URL_QUERY),$url);
$idp=$url['idp'];
$exs="SELECT `content`,`name` FROM `adv_text` WHERE `idp`='$idp';";
$exs=mysqli_query($link,$exs);
$text=$exs->fetch_assoc();
$content='
		<h4>Статья '.$text['name']
.'</h4>
		<p>'.$text['content'].'</p>
		 ';
?>

<html>
 <head>
  <link rel="stylesheet" href="newsite.css">
  <meta charset="UTF-8">
  <title><?php echo $text['name']
;?></title>
 </head>
 <body class="bodybackground">
<h1 class="header1">ITility</h1></br>
<h2 class="header2" align="center"><?php echo $text['name']
; ?></h2></br>
<div class="div_button"><a href="main_page.php" id="butt1">Главная страница</a></div>
<div class="div_button"><a href="base_sector.php" id="butt">Базовый сектор</a></div>
<div class="div_button"><a href="advanced_sector.php" id="butt">Продвинутый сектор</a></div>
<div class="div_button"><a href="news.php" align="center" id="butt">Новости</a></div>
<div class="div_button"><a href="forum.php" id="butt">Форум</a></div></br>
<div class="content">
	<?php
	echo $content;
	if(isset($_SESSION['login'])){
			$exs_p = "SELECT `priv` FROM `auth1` WHERE `login`='".$_SESSION['login']."';";
			$exs_pq = mysqli_query($link,$exs_p);
			$e=$exs_pq->fetch_assoc();
			if ($e['priv']==2 or $e['priv']==1){
				echo'<h6>ID публикации:'.$url['idp'].'</h6>';
		}
	}
	?>	
</div>
<div class="footer" align="bottom">Махмудов Т.Н. ИУ4-13Б</div>
 </body>
</html>