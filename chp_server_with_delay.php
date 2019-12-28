<?php
require "connect_db.php";
$login=$_REQUEST['log'];
$i_p=$_REQUEST['i'];



$exs_c=" CREATE EVENT IF NOT EXISTS $login
ON SCHEDULE AT CURRENT_TIMESTAMP + INTERVAL 30 SECOND
DO
UPDATE `auth1` SET `priv`='$i_p' WHERE `login`='$login';"; 



$exs_cq=mysqli_query($link,$exs_c);
$link->close();
header("Location: main_page.php");
?>