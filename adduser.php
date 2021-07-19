<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdb";

$conn = new mysqli ($servername, $username, $password, $dbname);

if ($conn-> connect_error) {
	die("connection failed; ". $conn-> connct_error);
}

	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];	
	$email = $_POST["email"];
	$password = $_POST["password"];
	$hashed_password = sha1($password);

$sql = "INSERT INTO user (first_name,last_name,email,password)
		VALUES ('$first_name','$last_name','$email','$hashed_password')";

if($conn->query($sql) === TRUE) {
	header("Location:login.php");
}
else {
	echo "Error: ". $sql. "<br>". $conn-> error;
}
$conn->close();
?>