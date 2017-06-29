<?php

$greeting = $_POST['greeting'];
$number = $_POST['number'];

for ($greeting = 1; $greeting <= $number; $greeting++) {
	echo "".$_POST['greeting']."<br>";
}
?>