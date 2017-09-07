<?php

$post = [
    'action' => 'listWorkers',
];

$ch = curl_init('www.alphis.net/warcraft.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

// execute!
$response = curl_exec($ch);

// close the connection, release resources used
curl_close($ch);

$response_array=json_decode($response,true);

$CumulativeGold=0;
$CumulatativeUpkeep=0;
$orcGold=0;
$nightelfGold=0;
$undeadGold=0;
echo "<table border='1'>\r\n";
echo "<tr>\r\n<th>Orc</th><th>Night Elf</th><th>Undead</th>\r\n</tr>\r\n";
foreach ($response_array as $member) {
	if ($member['race'] == "orc") {
		$CumulativeGold+=$member['gold'];
		$CumulatativeUpkeep+=$member['upkeep'];
		$orcGold+=($CumulativeGold-$CumulatativeUpkeep);
	}
	if ($member['race'] == "nightelf") {
		$CumulativeGold+=$member['gold'];
		$CumulatativeUpkeep+=$member['upkeep'];
		$nightelfGold+=($CumulativeGold-$CumulatativeUpkeep);
	}	
	if ($member['race'] == "undead") {
		$CumulativeGold+=$member['gold'];
		$CumulatativeUpkeep+=$member['upkeep'];
		$undeadGold+=($CumulativeGold-$CumulatativeUpkeep);
	}
	$CumulativeGold=0;
	$CumulatativeUpkeep=0;
}
echo "<tr>\r\n";
echo "<td>$orcGold</td>\r\n";
echo "<td>$nightelfGold</td>\r\n";
echo "<td>$undeadGold</td>\r\n";
?>