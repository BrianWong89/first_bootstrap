<?php
$numA = $_POST["numA"];
$numB = $_POST["numB"];
$operator = $_POST["operator"];
$ans="";
if ($operator == "+") {
	$ans = $numA + $numB;
} else if ($operator == "-") {
	$ans = $numA - $numB;
} else if ($operator == "%") {
	$ans = $numA % $numB;
} else if ($operator == "*") {
	$ans = $numA * $numB;
}
if ($ans != "")
	echo $ans;

?>