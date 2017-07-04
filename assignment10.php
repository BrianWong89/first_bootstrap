<?php
//Do not touch anything from here onwards
$numbers=array(1,2,3,4,5,6,7,8,9,10);
shuffle($numbers);

//Ok, you can code below
//Run a for loop such that you stop the for loop if you've accumulated at least $15 in donation.

$totalDonation=0;

foreach ($numbers as $number) {
	
	echo "Received $". $number . " ";
	$totalDonation+=$number;
	echo "Total sum received is $". $totalDonation . " <br>";
	//Add a condition here that checks if totalDonation is more than the sum
	if ($totalDonation >= 15) {
		echo "Campaign halted.<br>";
		break;
		//What command will make this for loop quit?
	}

}

?>