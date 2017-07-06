<?php
/* 
 *	Do not worry about the codes below 
 *
 */

$post = [
    'action' => 'listSavings',
];

$ch = curl_init('http://www.alphis.net/deposit.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

// execute!
$response = curl_exec($ch);

// close the connection, release resources used
curl_close($ch);

/* 
 *	Do not worry about the codes ABOVE 
 */

//Ok you can start worrying about the codes below.

//Hint, $response now is in json format, so you need to use the command, json_decode($response,true); 
//The true in the command changes the json response to array format.
$response_array=json_decode($response,true);

//print_r($response_array);

//As mentioned, i've told you that print_r() is a very important command. Sometimes, you just need to print_r to see what's in the array, before deciding how you want to program.

//Now, write the necessary code to tell me who earns the most.

$name="";
$deposits=0;

foreach ($response_array as $member) {
	for ($i = 0; $i < sizeof($member['deposits']); $i++) {
		if ($member['deposits'][$i] > $deposits) {
			$deposits=$member['deposits'][$i];
			$name=$member['name'];
		
		}
	}
}

echo $name. " has the most deposit of $" .$deposits;
		
?>