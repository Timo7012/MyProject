<?php
require "connect_db.php";
if (isset($_POST['text1'])){
	$text1=$_POST['text1'];
	$e_con="UPDATE `publications` SET `content`='$text1' WHERE `id`='1';";
	$eq_conq=mysqli_query($link,$e_con);
}
header("Location: main_page.php");
$link->close();
?>