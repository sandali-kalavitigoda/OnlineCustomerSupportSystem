<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "supportdb";

$conn = new mysqli ($servername, $username, $password, $dbname);

if ($conn-> connect_error) {
	die("connection failed; ". $conn-> connct_error);
}

	$User_Name = $_POST["User_Name"];
	$Email = $_POST["Email"];	
	$Contact_Number = $_POST["Contact_Number"];
	$Description = $_POST["Description"];
	

$sql = "INSERT INTO support (User_Name,Email,Contact_Number,Description)
		VALUES ('$User_Name','$Email','$Contact_Number','$Description')";

if($conn->query($sql) === TRUE) {
	header("Location:index2.php");
}
else {
	echo "Error: ". $sql. "<br>". $conn-> error;
}
$conn->close();
?>