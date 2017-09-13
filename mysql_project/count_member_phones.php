<?php
/**
 * Created by PhpStorm.
 * User: thero
 * Date: 12/9/2017
 * Time: 10:30 AM
 */
require_once("vendor/autoload.php");

//DB::debugMode();
$results = DB::query("SELECT * FROM `members`");
$numberOfPhones = 0;
foreach ($results as $member) {
    //print_r($member);
    $numberOfPhones = 0;
    $phoneNumbers = DB::query("SELECT * FROM `members_phones` WHERE member_id = %i", $member['id']);
    foreach ($phoneNumbers as $phoneNumber) {
        //print_r($phoneNumber);
        $numberOfPhones++;
    }
    echo "Member " . $member['id'] . " has " . $numberOfPhones . " phone number(s).<br>\r\n";
}