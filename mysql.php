<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "brian";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, username, password, age FROM user";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		
		
		if(username = "Brian" AND password = "Password") {
			echo "login successful;

		}
		
		
    }
} else {
    echo "login unsucessful;";
}

mysqli_close($conn);
?>