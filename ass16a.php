<?php

$post = [
    'action' => 'listActions',
];

$ch = curl_init('www.alphis.net/spellcasting.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

// execute!
$response = curl_exec($ch);

// close the connection, release resources used
curl_close($ch);

$response_array=json_decode($response,true);
//print_r($response_array);

$healthPoints=100;
$manaPoints=100;

echo "<table border='1'>\r\n";
echo "<tr>\r\n<th>Spell</th><th>Current HP</th><th>Current MP</th>\r\n</tr>\r\n";

foreach ($response_array as $spell) {
	if ($spell['type'] == "damage-spell") {
		$healthPoints+=$spell['hp'];
		
	}
	if ($spell['type'] == "heal-spell") {
		$healthPoints+=$spell['hp'];
		$manaPoints+=$spell['mana'];	
	}
	if ($spell['type'] == "fireball") {
		$manaPoints+=$spell['mana'];
	}
	echo "<tr>\r\n";
	echo "<td>".$spell['type']."</td>\r\n";
	echo "<td>".$healthPoints."</td>\r\n";
	echo "<td>".$manaPoints."</td>\r\n";
	echo "</tr>\r\n";
}

echo "</table>";

echo "You currently have $healthPoints health points and $manaPoints mana points.";

?>