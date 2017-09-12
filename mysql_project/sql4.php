<?php
/**
 * Created by PhpStorm.
 * User: thero
 * Date: 11/9/2017
 * Time: 10:56 PM
 */
require_once("vendor/autoload.php");

$results = DB::query("SELECT * FROM `members` WHERE age=%i", 0);
$rows = 0;

foreach ($results as $row) {
    $dateofbirth = DateTime::createFromFormat('Y-m-d', $row['dateofbirth']);
    if ($dateofbirth instanceof DateTime) {
        echo "" . $row['name'] . "=" . $dateofbirth->diff(new DateTime('now'))->y . "<br>";

    }
    DB::query("UPDATE `members` SET age = " . $dateofbirth->diff(new DateTime('now'))->y . " WHERE id = " . $row['id']);

    $rows++;
}

echo "" . $rows . " rows updated . ";