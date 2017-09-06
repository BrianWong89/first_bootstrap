<?php

$post = [
    'action' => 'listSavings',
];

$ch = curl_init('http://www.alphis.net/family_savings.php?action=listSavings');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

// execute!
$response = curl_exec($ch);

// close the connection, release resources used
curl_close($ch);

$response_array=json_decode($response,true);

$CumulativeSalary=0;
$CumulativeBills=0;
$fullname="";

echo "<table border='1'>\r\n";
echo "<tr>\r\n<th>Name</th><th>Cumulative Salary</th><th>Cumulative Salary after Bills</th>\r\n</tr>\r\n";

foreach ($response_array as $member) {
	$fullname=$member['name']." ".$member['surname'];
	$CumulativeSalary=array_sum($member['salary']);
	foreach ($member['children'] as $c) {
		$CumulativeBills+=array_sum($c['bills']);
	}
echo "<tr>\r\n";
echo "<td>".$fullname."</td>\r\n";
echo "<td>".$CumulativeSalary."</td>\r\n";
echo "<td>".($CumulativeSalary-$CumulativeBills)."</td>\r\n";
$CumulativeSalary=0;
$CumulativeBills=0;
}

?>