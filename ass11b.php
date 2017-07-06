<?php
$totalTissue=25;
$customers=array(1,1,2,3,4,5,6,3,2,1,2,2,3,4,5,6,7,2,1,1,1,1,2,3);
shuffle($customers);

//Write your code below here
foreach ($customers as $c) {
	if ($c > $totalTissue) {
		echo "Customer asked for " . $c . " tissues but I don't have enough.<br>";
		continue;
	}
	
	echo "Dispensing " . $c . " tissues.";
	$totalTissue-=$c;
	echo "Remaining " . $totalTissue . "<br>";	
}

	echo "Remaining tissue at the end of the day: " . $totalTissue . "<br>"; //change

?>

