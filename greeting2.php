<?php

$i = 0;
$n = $_POST['number'];

while ($i < $n) {
		echo "".$_POST['greeting']."<br>";
		$i++;
}
?>