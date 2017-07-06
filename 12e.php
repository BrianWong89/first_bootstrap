<?php
/* 
 *	Do not worry about the codes below 
 *
 */

$post = [
    'action' => 'listSavings',
];

$ch = curl_init('http://www.alphis.net/savings.php');
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

$savings=0;
$users=0;
$totalUsers=sizeof($response_array);

foreach ($response_array as $member) {
	if ($member['savings'] >= 30000) {
		$savings=$member['savings'];
		$users++;
		
	}
}

echo "The percentage of users who saved more than $30000 is " . $users / sizeof($response_array) * 100 . "%";
		
?>