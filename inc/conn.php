<?php
	//$conn= mysqli_connect(dbserver,dbuser,dbpass,dbname);
	
	$conn = mysqli_connect('localhost','root','','products cart');
	
	//cheking the connection
	
	if(mysqli_connect_errno()){
		die('Database connection failed' . mysqli_connect_error());
	}else{
		//echo "Connection Successful";
	}
?>