<?php

$i = 0;
$number = $_POST['number'];

echo "<table border='1'>";
while ($i < $number) {
	echo "<tr>";
	echo "<td>".$_POST['greeting']."</td>";
	$i++;
	echo "</tr>";
}
echo "</table>";

?>