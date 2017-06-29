<?php

$i = $_POST['greeting'];
$number = $_POST['number'];

for ($i = 0; $i < $number; $i++) {
	echo "".$_POST['greeting']."<br>";
}
?>