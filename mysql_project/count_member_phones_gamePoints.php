<?php
/**
 * Created by PhpStorm.
 * User: Brian
 * Date: 13/9/2017
 * Time: 11:20 AM
 */
require_once("vendor/autoload.php");

//DB::debugMode();
$results = DB::query("SELECT m.id, m.name, COUNT(*) as numberOfPhones FROM " .
    "members m,members_phones mp WHERE m.id = mp.member_id " .
    "GROUP by m.id");