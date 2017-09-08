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

$sql = "SELECT * FROM user WHERE username='".$_POST['username']."'";
$sql2 = "UPDATE user SET password='".$_POST['password']."' WHERE username='".$_POST['username']."'";

if ($sql != $_POST['username']) {
	echo "Invalid username";

if (mysqli_query($conn, $sql2)) {
    echo "Record updated successfully";
	
}
} 

else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>