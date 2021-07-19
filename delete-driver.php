<?php require_once('inc/connd.php'); ?>
<?php 

	/*
		DELETE FROM table_name
		WHERE column_name = value
		LIMIT 1
	*/

	$query = "DELETE FROM drivers WHERE id = 7 LIMIT 1";

	$result_set = mysqli_query($connd, $query);

	if ($result_set) {
		echo mysqli_affected_rows($connd) . " Record deleted.";
	} else {
		echo "Database query failed.";
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Delete Items</title>
</head>
<body>
	
</body>
</html>
<?php mysqli_close($connd); ?>