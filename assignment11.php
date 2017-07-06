<?php
$totalTissue=25;
$customers=array(1,2,3,4,5,6,7,8,9);
shuffle($customers);

//Write your code below here
foreach ($customers as $c) {
	if ($c > $totalTissue) {
		echo "Customer asked for " . $c . " tissues but I don't have enough.<br>";
		echo "Machine has stopped functioning.<br>";
		break;
	}
	
	echo "Dispensed " . $c . " tissues.";
	$totalTissue-=$c;
	echo "Remaining " . $totalTissue . "<br>";
	
}

?>
