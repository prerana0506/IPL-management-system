<?php
$mysql_hostname = "15.207.84.225";
$mysql_user = "cse";
$mysql_password = "cse";
$mysql_database = "IPL";
$prefix = "";
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysqli_select_db($bd, $mysql_database) or die("Could not select database");
?>