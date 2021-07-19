<?php require_once('inc/connd.php'); ?>
<?php 

	/*
		UPDATE table_name
		SET column_1 = value_1, column_2 = value_2
		WHERE column_name = value
		LIMIT 1
	*/

	$query = "UPDATE drivers SET Devices = 'Techly laptop TL0909' WHERE id = 1";

	$result_set = mysqli_query($connd, $query);

	if ($result_set) {
		echo mysqli_affected_rows($connd) . " Record updated";
	} else {
		echo "Database query failed.";
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update Item</title>
</head>
<body>
	
</body>
</html>
<?php mysqli_close($connd); ?>