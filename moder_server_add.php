<?php
require "connect_db.php";
session_start();
if (isset($_POST['text1'])){
	$id=$_SESSION['login'];
	$exs_n="SELECT `id` FROM `auth1` WHERE `login`='$id';";
	$exs_nq=mysqli_query($link,$exs_n);
	$id= $exs_nq->fetch_assoc();
	$text1=$_POST['text1'];
	$text2=$_POST['text2'];
	$id_u=$id['id'];
	$e_cont="INSERT INTO `publications`(`id`,`name`,`content`)  VALUES ('$id_u','$text2','$text1');";
	$eq_contq=mysqli_query($link,$e_cont);

}
//header("Location: main_page.php");
$link->close();
?>