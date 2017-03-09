<?php

$host_name = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "weave";

$con = mysql_connect($host_name,$db_user,$db_pass);
//check con
if ($con) {
	$selectdb = mysql_select_db($db_name);
	if(!$selectdb){
		echo "db select fail";
	}
}else{
	echo "mysql connection fail.";
}
?>