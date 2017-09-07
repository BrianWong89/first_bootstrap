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
$cumulativeHP=0;
$cumulativeMP=0;
$remainingHP=0;
$remainingMP=0;

echo "<table border='1'>\r\n";
echo "<tr>\r\n<th>Spell</th><th>Current HP</th><th>Current MP</th>\r\n</tr>\r\n";

foreach ($response_array as $member) {
	if ($member['type'] == "damage-spell") {
		$cumulativeHP-=$member['hp'];
		$remainingHP=($healthPoints-$cumulativeHP);
		$remainingMP=($manaPoints-$cumulativeMP);
	}
	if ($member['type'] == "heal-spell") {
		$cumulativeHP-=$member['hp'];
	    $cumulativeMP+=$member['mana'];
		$remainingHP=($healthPoints-$cumulativeHP);
		$remainingMP=($manaPoints-$cumulativeMP);
		
	}
	if ($member['type'] == "fireball") {
		$cumulativeMP-=$member['mana'];
		$remainingHP=($healthPoints-$cumulativeHP);
		$remainingMP=($manaPoints-=$cumulativeMP);
	}
echo "<tr>\r\n";
echo "<td>".$member['type']."</td>\r\n";
echo "<td>$remainingHP</td>\r\n";
echo "<td>$remainingMP</td>\r\n";
}
echo "You currently have $remainingHP health points and $remainingMP mana points.";

?>