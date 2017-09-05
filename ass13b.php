<?php
$post = [
    'action' => 'listDomains',
];

$ch = curl_init('http://www.alphis.net/domains.php?action=listDomains');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

// execute!
$response = curl_exec($ch);

// close the connection, release resources used
curl_close($ch);

$response=json_decode($response,true);

echo "<table border='1'>\r\n";
echo "<tr>\r\n<th>Domain</th><th>No of Ws</th><th>Country</th></tr>\r\n";

$w = 0;

foreach ($response as $member) {
	$x=$member['domain'];
	for ($i=0; $i < strlen($x); $i++) {
		if ($x[$i] == "w") {
			$w++;
		}
	}
echo "<tr>\r\n";
echo "<td>".$member['domain']."</td>\r\n";
echo "<td>".$w."</td>\r\n";
echo "<td>".$member['country']."</td>\r\n";
$w = 0;	
}

echo "</table>\r\n";

?>