<?php require_once('inc/conns.php'); ?>
<?php 

	$query = "SELECT User_Name,Email,Contact_Number,Description FROM support";

	$result_set = mysqli_query($conns, $query);

	if ($result_set) {
		// checking how many records returned from the query
		echo mysqli_num_rows($result_set) . " Records found.<hr>";

		$table = '<table>';
		$table .= '<tr><th>User Name</th><th>Email</th><th>Contact Number</th><th>Description</th></tr>';

		while ($record = mysqli_fetch_assoc($result_set)) {
			$table .= '<tr>';
			$table .= '<td>' . $record['User_Name'] . '</td>';
			$table .= '<td>' . $record['Email'] . '</td>';
			$table .= '<td>' . $record['Contact_Number'] . '</td>';
			$table .= '<td>' . $record['Description'] . '</td>';
			$table .= '</tr>';
		}

		$table .= '</table>';
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select Support</title>
	<style>
		table { border-collapse: collapse; }
		td, th { border: 1px solid black; padding: 10px; }
	</style>
</head>
<body>
	<?php echo $table; ?>
</body>
</html>
<?php mysqli_close($conns); ?>