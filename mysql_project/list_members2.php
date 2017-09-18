<?php
/**
 * Created by PhpStorm.
 * User: thero
 * Date: 16/9/2017
 * Time: 12:07 PM
 */
require_once("vendor/autoload.php");
$return = array();
$return["members"] = array();
$totalGamePoints = 0;

$results = DB::query("SELECT * FROM `members`");
foreach ($results as $member) {
    $member["handphones"] = array();
    //print_r($member);
    $phoneNumbers = DB::query("SELECT * FROM `members_phones` WHERE member_id = %i", $member['id']);
    foreach ($phoneNumbers as $phoneNumber) {
        $member["gamepoints"] = array();
        //print_r($phoneNumber);
        array_push($member["handphones"], $phoneNumber['phone_number']);
        $gamePoints = DB::query("SELECT * FROM `members_game_points` WHERE member_id = %i", $member['id']);
        foreach ($gamePoints as $gamePoint) {
            array_push($member["gamepoints"], $gamePoint['game_points']);
            $member["totalGamePoints"] = ($totalGamePoints += $gamePoint['game_points']);
        }
        $totalGamePoints = 0;
    }
    array_push($return["members"], $member);
}
echo json_encode($return, JSON_PRETTY_PRINT);