<?php

$pw=$_POST['pw'];

$em=$_POST['em'];

$lg=$_POST['lg'];

$pw1=$_POST['pw1'];

require "connect_db.php";

if ($pw==$pw1) {}

else{die("You password dont match");};



$preg_password="/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/";

$preg_login="/^([A-Za-z]{1})([A-Za-z\d\_]{5,})$/";



if(preg_match($preg_password,$pw)){}

	else{die("You entered wrong form of password");};





if(filter_var($em, FILTER_VALIDATE_EMAIL)){}

		else{die("You entered wrong form of email");};



if(preg_match($preg_login,$lg)){}

	else{die("You entered wrong form of login");};



$exs = "SELECT * FROM `auth1` where `email`='$em';";

$exs1 = "SELECT * FROM `auth1` where `login`='$lg';";



$exs_q = mysqli_query($link,$exs);

$exs1_q = mysqli_query($link,$exs1);



if(mysqli_num_rows($exs_q)>0)

	{die("Email already exsists");};



if(mysqli_num_rows($exs1_q)>0)

	{die("Login already exisssts");};





$query1 = "INSERT into `auth1` (email, login, password) 

VALUES ('$em', '$lg', '".md5($pw)."');"; 



$result=mysqli_query($link,$query1);

if($result){}

	else{echo ('bad');};



$link->close();

?>

<html>

 <head>

<meta charset="UTF-8">

</head>

<body>

<p>You succesfully registred!</p>

<p><a href="authoriz.php">Go to authorization</a></p>

</body>

</html>