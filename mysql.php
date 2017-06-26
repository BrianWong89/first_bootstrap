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
		
		
		if($row["age"] >= 29) {
			echo "id: " . $row["id"]. " - Username: " . $row["username"]. " Password: " . $row["password"]. "<br>";

		}
		
		
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>