<?php require_once('inc/conn.php');?>
<?php

	/*
		INSERT INTO table_name (
			column1, column2, etc
		) VALUES (
			value1, value2, etc
		)
	*/

	$Item_name = 'Techly laptop Latest pro';
	$Item_description  = 'Added 10';
	$Price		= 225000;
	$Quantity	= 10;
	$Item_code = 671;


	$query = "INSERT INTO product ( Item_name, Item_description, Price,Quantity, Item_code ) VALUES ( '{$Item_name}', '{$Item_description}', {$Price}, {$Quantity}, {$Item_code} )";

	$result = mysqli_query($conn, $query);

	if ($result) {
		echo "1 Record added.";
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
<?php mysqli_close($conn);?>