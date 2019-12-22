<?php
require "connect_db.php";
if (isset($_POST['text1'])){
	
	$idpub=$_POST['idpub'];
	$text1=$_POST['text1'];
	$text2=$_POST['text2'];
	
	if($_POST['sector']=='Базовый сектор'){
		$sector='publications';
	}	

	if($_POST['sector']=='Продвинутый сектор'){
		$sector='adv_text';
	}
	
	$e_cont="UPDATE `$sector` SET `content`='$text1' WHERE `idp`='$idpub';";
	$eq_contq=mysqli_query($link,$e_cont);
	
	$e_conn="UPDATE `$sector` SET `name`='$text2' WHERE `idp`='$idpub';";
	$eq_connq=mysqli_query($link,$e_conn);
}
header("Location: main_page.php");
$link->close();
?>