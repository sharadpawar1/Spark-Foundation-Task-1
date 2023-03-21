<?php
	
	$servername= "localhost";
	$username = "root";
	$password = "";
	$dbname="spark_bank";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if(!$conn){
		die("could not connect to database  due to following error".mysqli_connect_error());
	}
?>