<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "first_bootstrap";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO user (username, password)
VALUES ('".$_GET['username']."','".$_GET['password']."')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	echo "<br>$sql";
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>