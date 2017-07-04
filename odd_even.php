<?php
$start=rand(0,10);
$end=rand(11,100);
$numbers=range($start,$end);

//Kenneth: print_r is a very powerful command I use to display the contents of an array.
//Kenneth: It will come in handy for you.
//print_r($numbers);
$odd=0;
$even=0;

//Write your codes here
foreach ($numbers as $number) {
	//Next time right, for your codes, make sure you indent it properly as a good practice so easier to read for all
	if ($number % 2 == 0) { //number is odd 
		//Increase $odd
		$even++; //This is good
	} else { //number is even
		//Increase $even
		$odd++; //This is good	
	}
}	

echo "There are $odd odd numbers<br>";
echo "There are $even even numbers<br>";

?>