<?php

require_once("vendor/autoload.php");

$results = DB::query("SELECT * FROM `members` WHERE age = 0");
$rows = 0;

foreach ($results as $row) {
    $dateofbirth = DateTime::createFromFormat('Y-m-d', $row['dateofbirth']);
    if ($dateofbirth instanceof DateTime) {
        echo "" . $row['name'] . "=" . $dateofbirth->diff(new DateTime('now'))->y . "<br>";

    }
    DB::query("UPDATE `members` SET age = " . $dateofbirth->diff(new DateTime('now'))->y . " WHERE id = " . $row['id']);
    //1) Do it with Placeholders means %s, %i
    //2) Do it with MeekroDB's way.
    //3) Use MeekroDB to add 2 more members, your brother and your father.
    $rows++;
}

echo "" . $rows . " rows updated . ";