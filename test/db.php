<?php
	$servername="localhost";
	$username="root";
	$password="";
	$database="db_eams";
	$connection=mysql_connect($servername,$username,$password);
	if($connection)
	{
		mysql_select_db($database);
	}
	else
	{
		die("Database not Found.");
	}
	

?>