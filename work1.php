<?php

$return = array();
$return['odd'] = 0;
$return['even'] = 0;
$numbers = array(1, 2, 3, 6, 8, 3, 5, 6, 8, 9, 20);
//Write your codes below here

foreach ($numbers as $number) {
    //print_r($number);
    if ($number % 2 != 0) {
        $return['odd']++;
    } else {
        $return['even']++;
    }
}

//End of your codes
echo json_encode($return, JSON_PRETTY_PRINT);