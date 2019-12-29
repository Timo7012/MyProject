<?php
require "connect_db.php";
$exs_name="SELECT `name`,`idp` FROM `adv_text`;";
$exs_nameq=mysqli_query($link,$exs_name); 
for($n=1;$name=$exs_nameq->fetch_assoc();$n++){
	echo'
		<h3>'.$n.')<a href="adv1.php?idp='.$name['idp'].'">'.$name['name'].'</a></h3>
			 ';
};
$link->close();
?>