<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "first_bootstrap";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * from user WHERE username = '".$_POST['username']."' AND password ='".$_POST['password']."'";
$result = mysqli_query($conn, $sql);

//If there is more than 1 row, it means successful login
if (mysqli_num_rows($result) > 0) {
	echo "Successful login";
} else {
	//0 rows, means unsuccessful login
	echo "Failed login";
}
mysqli_close($conn);

?>