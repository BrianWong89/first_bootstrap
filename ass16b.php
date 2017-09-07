<?php

$post = [
    'action' => 'listActions',
];

$ch = curl_init('www.alphis.net/spellcasting-death.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

// execute!
$response = curl_exec($ch);

// close the connection, release resources used
curl_close($ch);

$response_array=json_decode($response,true);
//print_r($response_array);
//view-source:http://www.alphis.net/spellcasting-death.php?action=listActions

$healthPoints=100;
$manaPoints=100;

echo "<table border='1'>\r\n";
echo "<tr>\r\n<th>Spell</th><th>Current HP</th><th>Current MP</th>\r\n</tr>\r\n";

foreach ($response_array as $member){
	
}

//if () {
	//echo "You have died instantly.";
//}

?>