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
echo "<tr>\r\n<th>Domain</th><th>Country</th></tr>\r\n";

foreach ($response as $member) {
	if($member['country'] == "Singapore") {
		echo "<tr>\r\n";
		echo "<td>".$member['domain']."</td>\r\n";
		echo "<td>".$member['country']."</td>\r\n";
	}
		echo "</tr>\r\n";
}


echo "</table>\r\n";

?>