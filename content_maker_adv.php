<?php
require "connect_db.php";
if ($result = mysqli_query($link, "SELECT `idp` FROM `publications_adv`")){
    $row_cnt = mysqli_num_rows($result);
   }
$r=$row_cnt+1;
for($n=1;$n<$r;$n++){
$exs_con="SELECT `hrefs` FROM `publications_adv` WHERE `idp`='$n';";
$exs_conq=mysqli_query($link,$exs_con);
$text= $exs_conq->fetch_assoc();

$exs_name="SELECT `name` FROM `adv_text` WHERE `idp`='$n';";
$exs_nameq=mysqli_query($link,$exs_name);
$name= $exs_nameq->fetch_assoc();

$content='
		<h3>'.$n.')<a href="'.$text['hrefs'].'">'.$name['name'].'</a></h3>
		 ';
echo $content;
};
$link->close();
?>