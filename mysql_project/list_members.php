<?php
/**
 * Created by PhpStorm.
 * User: Brian
 * Date: 15/9/2017
 * Time: 9:47 AM
 */
require_once("vendor/autoload.php");
$return = array();
$return["members"] = array();
$results = DB::query("SELECT * FROM `members`");
foreach ($results as $member) {
    $member["handphones"] = array();
    //What to do here?
    //print_r($member);
    $phoneNumbers = DB::query("SELECT * FROM `members_phones` WHERE member_id = %i", $member['id']);
    foreach ($phoneNumbers as $phoneNumber) {
        //print_r($phoneNumber);
        array_push($member["handphones"], $phoneNumber['phone_number']);
    }
    array_push($return["members"], $member);

}
echo json_encode($return, JSON_PRETTY_PRINT);