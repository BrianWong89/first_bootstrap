<?php
/* 
 *	Do not worry about the codes below 
 *
 */

$post = [
    'action' => 'listSavings',
];

$ch = curl_init('http://www.alphis.net/kids.php');
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
		
$e=0;
$fullname="";

foreach ($response_array as $member) {
	$fullname=$member['name'].$member['surname'];
	foreach ($member['children'] as $c) {
		$fullname.=$c['name'];
	}
	for ($x = 0; $x < strlen($fullname); $x++) {
		if ($fullname[$x] == "e"){
			$e++;
		}
	}
	
}
		
echo "Total number of 'e' = ".$e."";
		
?>