<?php
require "connect_db.php";
if ($result = mysqli_query($link, "SELECT `idp` FROM `publications`")){
    $row_cnt = mysqli_num_rows($result);
   }
$r=$row_cnt+1;
echo($r);
for($n=1;$n<$r;$n++){
$exs_con="SELECT `content` FROM `publications` WHERE `idp`='$n';";
$exs_conq=mysqli_query($link,$exs_con);
$text= $exs_conq->fetch_assoc();
$content='
		</br>
		<h4>Статья '.$n.'</h4>'.$text['content'].'
		 ';
echo $content;
};
$link->close();
?>