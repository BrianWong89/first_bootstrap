<?php

$i = $_POST['greeting'];
$number = $_POST['number'];

echo "<table border='1'>";
for ($i = 0; $i < $number; $i++) {
	echo "<tr>";
	echo "<td>".$_POST['greeting']."</td>";
	echo "</tr>";
}
echo "</table>";

?>