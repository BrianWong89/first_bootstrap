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
print_r($response_array);

?>