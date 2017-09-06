<?php

$post = [
    'action' => 'listTransactions',
];

$ch = curl_init('http://www.alphis.net/family_transactions.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

// execute!
$response = curl_exec($ch);

// close the connection, release resources used
curl_close($ch);

$response_array=json_decode($response,true);

$CumulativeSalary=0;
$CumulativeBills=0;
$AddedValue=0;
$fullname="";

echo "<table border='1'>\r\n";
echo "<tr>\r\n<th>Name</th><th>Cumulative Salary</th><th>Cumulative Salary after Bills</th>\r\n</tr>\r\n";
foreach ($response_array as $member) {
	$fullname=$member['name']." ".$member['surname'];
	foreach ($member['children'] as $c) {
		foreach ($c['transactions'] as $y) {
			if ($y['type'] == "add") {
				$AddedValue+=$y['value'];
				$CumulativeSalary=array_sum($member['salary'])+$AddedValue;
			}
				if ($y['type'] == "subtract") {
					$CumulativeBills+=$y['value'];
				}
		}
	}
echo "<tr>\r\n";
echo "<td>".$fullname."</td>\r\n";
echo "<td>".$CumulativeSalary."</td>\r\n";
echo "<td>".($CumulativeSalary-$CumulativeBills)."</td>\r\n";
$CumulativeSalary=0;
$AddedValue=0;
$CumulativeBills=0;
}

?>