<?php
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';
	
	$db_name = 'chat'; //like a datbase named as chat
	
	if(!@mysql_connect($db_host , $db_user ,$db_pass) || !@mysql_select_db($db_name)){
		die(mysql_error());
	}else{
		$feedback[]  = "connected to database!";
	}



?>