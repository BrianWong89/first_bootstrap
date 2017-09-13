<?php
/**
 * Created by PhpStorm.
 * User: thero
 * Date: 12/9/2017
 * Time: 10:30 AM
 */
require_once("vendor/autoload.php");

//DB::debugMode();
$results = DB::query("SELECT m.id, m.name, COUNT(*) as numberOfPhones FROM " .
    "members m,members_phones mp WHERE m.id = mp.member_id " .
    "GROUP by m.id");

foreach ($results as $member) {
    //print_r($member);
    echo "Member " . $member['id'] . ", " . $member['name'] . ", has " . $member['numberOfPhones'] . " phone number(s).<br>\r\n";
}