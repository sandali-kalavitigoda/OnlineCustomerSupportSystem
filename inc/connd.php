<?php
	//$connd= mysqli_connect(dbserver,dbuser,dbpass,dbname);
	
	$connd = mysqli_connect('localhost','root','','driversdb');
	
	//cheking the connection
	
	if(mysqli_connect_errno()){
		die('Database connection failed' . mysqli_connect_error());
	}else{
		//echo "Connection Successful";
	}
?>