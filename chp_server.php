<?php
require "connect_db.php";
$login=$_REQUEST['log'];
$i_p=$_REQUEST['i'];
$exs_c="UPDATE `auth1` SET `priv`='$i_p' WHERE `login`='$login';"; 
$exs_cq=mysqli_query($link,$exs_c);
$link->close();
?>