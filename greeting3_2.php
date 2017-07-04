<?php

$i = 0;
$number = $_POST['number'];

echo "<table border='1'>";
while (true) { //This code here also, must indent properly next time
	echo "<tr>";
	echo "<td>".$_POST['greeting']."</td>";
	echo "</tr>";
	$i++;

	if ($i == $number)
		break;	
}

echo "</table>";

?>