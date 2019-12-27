<?php
require "connect_db.php";
$exs_con="SELECT `hrefs` FROM `publications_adv`;";
$exs_conq= mysqli_query($link,$exs_con);  
for($n=1;$text=$exs_conq->fetch_assoc();$n++){

$exs_name="SELECT `name` FROM `adv_text` WHERE `idp`='$n';";
$exs_nameq=mysqli_query($link,$exs_name);
$name= $exs_nameq->fetch_assoc();

echo'
	<h3>'.$n.')<a href="'.$text['hrefs'].'">'.$name['name'].'</a></h3>
		 ';
};
$link->close();
?>