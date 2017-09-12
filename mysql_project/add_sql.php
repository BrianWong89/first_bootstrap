<?php
/**
 * Created by PhpStorm.
 * User: thero
 * Date: 12/9/2017
 * Time: 10:30 AM
 */
require_once("vendor/autoload.php");

$results = DB::query("SELECT phone_number FROM `members_address`");
$phoneNum = 0;

foreach ($results as $row) {
    $phoneNum++;
    echo "Member " . $row['member_id'] . " has " . $phoneNum . " phone number(s).";
}