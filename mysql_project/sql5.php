<?php
/**
 * Created by PhpStorm.
 * User: thero
 * Date: 12/9/2017
 * Time: 1:41 AM
 */
require_once("vendor/autoload.php");

$name = 'Jeremy Wong';
$gender = 'Male';
DB::insert('members', array(
    'name' => $name,
    'gender' => $gender,
    'dateofbirth' => '1994-01-14',
    'age' => 23,
));

$name2 = 'Wong Wan Leong';
$gender2 = 'Male';
DB::insert('members', array(
    'name' => $name2,
    'gender' => $gender2,
    'dateofbirth' => '1954-12-16',
    'age' => 62,
));