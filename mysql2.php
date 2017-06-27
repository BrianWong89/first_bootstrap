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

$sql = "SELECT * from user WHERE username = '".$_GET['username']."'";

$result = mysqli_query($conn, $sql);
// If username exists and password is correct, show Success Login
// If username exists and password is wrong, show Wrong Password
// If username does not exist, show Wrong Username

//If there is more than 1 row, it means successful login
if (mysqli_num_rows($result) > 0) {
	//Username is 100% correct
	
	while($row = mysqli_fetch_assoc($result)) {
		if ($row['password'] == $_GET['password']) {
			echo "Succesful login<br>";
			echo "<br>Your email is brian.wong@alphis.net";
			
		}
		if ($row['password'] != $_GET['password']) 
			
			echo "Wrong password";
		
	}

}
else {
	//0 rows, means unsuccessful login
	echo "Wrong Username";
}
mysqli_close($conn);

?>