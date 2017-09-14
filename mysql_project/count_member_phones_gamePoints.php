<?php
/**
 * Created by PhpStorm.
 * User: Brian
 * Date: 13/9/2017
 * Time: 11:20 AM
 */
require_once("vendor/autoload.php");

//DB::debugMode();
$results = DB::query("SELECT * FROM `members`");

echo "<table border='1'>\r\n";
echo "<tr>\r\n<th>Member ID</th><th>Name</th><th>Number of Phones</th><th>Number of Game Points</th>\r\n</tr>\r\n";

$numberOfPhones = 0;
$totalGamePoints = 0;
foreach ($results as $member) {
    //print_r(members);
    $numberOfPhones = 0;
    $phoneNumbers = DB::query("SELECT * FROM `members_phones` WHERE member_id = %i", $member['id']);
    foreach ($phoneNumbers as $phoneNumber) {
        $numberOfPhones++;
    }
    $gamePoints = DB::query("SELECT * FROM `members_game_points` WHERE member_id = %i", $member['id']);
    $totalGamePoints = 0;
    foreach ($gamePoints as $gamePoint) {
        $totalGamePoints += $gamePoint['game_points'];
    }
    echo "<tr>\r\n";
    echo "<td>" . $member['id'] . "</td>\r\n";
    echo "<td>" . $member['name'] . "</td>\r\n";
    echo "<td>" . $numberOfPhones . "</td>\r\n";
    echo "<td>" . $totalGamePoints . "</td>\r\n";
    echo "</tr>\r\n";
}

echo "</table>";

?>


