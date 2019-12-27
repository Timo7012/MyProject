<?php
require "connect_db.php";
session_start();
if (isset($_POST['text1'])){
	$idl=$_SESSION['login'];
	$exs_n="SELECT `id` FROM `auth1` WHERE `login`='$idl';";
	$exs_nq=mysqli_query($link,$exs_n);
	$id= $exs_nq->fetch_assoc();
	$sector=$_POST['sector'];
	$text1=$_POST['text1'];
	$text2=$_POST['text2'];
	$id_u=$id['id'];
	$e_cont="INSERT INTO `$sector`(`id`,`name`,`content`)  VALUES ('$id_u','$text2','$text1');";
	$eq_contq=mysqli_query($link,$e_cont);
}
header("Location: main_page.php");
$link->close();
?>