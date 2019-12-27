<?php
parse_str(parse_url($_SERVER['REQUEST_URI'],PHP_URL_QUERY),$url);
foreach ($url as $key => $value) {
 	echo $key.' : '.$value.' <br>';
 } 
?>