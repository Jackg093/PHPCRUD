<?php
$host = "localhost";
$user = "root";
$password = "";
$datbase = "dbtuts";
$con = mysql_connect($host,$user,$password) or die(mysql_error());
mysql_select_db($datbase, $con) or die(mysql_error());
?>