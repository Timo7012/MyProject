<?php
$pw=$_POST['pw'];
$em=$_POST['lg'];
$lg=$_POST['lg'];

require "connect_db.php";

$exs_e = "SELECT `login` FROM `auth1` where `email`='$em' and `password`='".md5($pw)."';";
$exs_l = "SELECT `login` FROM `auth1` where `login`='$lg' and `password`='".md5($pw)."';";

$exs_q = mysqli_query($link,$exs_e);
$exs1_q = mysqli_query($link,$exs_l);

if(mysqli_num_rows($exs_q)>0 or mysqli_num_rows($exs1_q)>0)
	{
session_start(); 
$_SESSION['login']=$lg;
$_SESSION['password']=md5($pw);
header("Location: main_page.php");
exit;
}
	else {die("Password or Login/EMAIL Invalid.Please try again.");};
$link->close();
?>