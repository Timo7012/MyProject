<?php
require "connect_db.php";
$exs_con="SELECT `content`,`name` FROM `publications`;";
$exs_conq=mysqli_query($link,$exs_con);
for($n=1;$text = $exs_conq->fetch_assoc();$n++){
    echo '
		</br>
		<h4>Статья '.$n.'</h4>
		<h3>'.$text['name'].'</h3>
		<p>'.$text['content'].'</p>
		 ';
}
$link->close();
?>