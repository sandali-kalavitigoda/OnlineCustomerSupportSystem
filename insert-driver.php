<?php require_once('inc/connd.php');?>
<?php

	/*
		INSERT INTO table_name (
			column1, column2, etc
		) VALUES (
			value1, value2, etc
		)
	*/

	$Devices = 'Techly laptop TL0005';
	$Description  = 'Updated Driver 5';
	$Drivers		= 'https://www.drivers.com/update/pc-fix-tips/this-site-cant-provide-a-secure-connection-in-chrome/';

	$query = "INSERT INTO drivers ( Devices,Description,Drivers) VALUES ( '{$Devices}', '{$Description}', '{$Drivers}' )";

	$result = mysqli_query($connd, $query);

	if ($result) {
		//echo "1 Record added.";
	} else {
		echo "Database query failed.";
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Insert Item</title>
</head>
<body>
</body>
</html>
<?php mysqli_close($connd);?>