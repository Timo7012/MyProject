<?php
require "connect_db.php";
$exs_con="SELECT `idp`,`content`,`name` FROM `publications`;";
$exs_conq=mysqli_query($link,$exs_con);
for($n=1;$text = $exs_conq->fetch_assoc();$n++){
    echo '
		</br>
		<h4>Статья '.$n.'</h4>';
	if(isset($_SESSION['login'])){
		$exs_p = "SELECT `priv` FROM `auth1` WHERE `login`='".$_SESSION['login']."';";
		$exs_pq = mysqli_query($link,$exs_p);
		$e=$exs_pq->fetch_assoc();
		if ($e['priv']==2 or $e['priv']==1){
			echo '<h6>ID публикации:'.$text['idp'].'</h6>';
		}
	}
	echo '<h3>'.$text['name'].'</h3>
		<p>'.$text['content'].'</p>
		 ';
}
$link->close();
?>