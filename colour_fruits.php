<?php
$colours=array("Red","Blue","Green");
$fruits=array("Apple","Banana","Carrot");

for ($x = 0; $x < sizeof($colours); $x++) {
	for ($y = 0; $y < sizeof($fruits); $y++) {
		echo "$colours[$x] $fruits[$y]<br>";
	}
}

?>