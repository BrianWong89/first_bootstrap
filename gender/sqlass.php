<?php

require_once("vendor/autoload.php");

$results = DB::query("SELECT * FROM `members` WHERE gender='Male'");

echo "<table border='1'>\r\n";
echo "	<tr>";
echo "		<th>ID</th>";
echo "		<th>Name</th>";
echo "		<th>Gender</th>";
echo "	</tr>";

foreach ($results as $row) {
	echo "<tr>\r\n";
	echo "	<td>" . $row['id'] . "</td>\r\n";
	echo "	<td>" . $row['name'] . "</td>\r\n";
	echo "	<td>" . $row['gender'] . "</td>\r\n";
	echo "</tr>\r\n";
}
echo "</table>";