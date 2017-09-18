<?php
/**
 * Created by PhpStorm.
 * User: Brian
 * Date: 15/9/2017
 * Time: 9:38 AM
 */
$return = array();
$return["domains"] = array();
$domain1 = array(
    "domain" => "www.starhub.com.sg",
    "country" => "Singapore",
);
$domain2 = array(
    "domain" => "www.cfirst.ae",
    "country" => "United Arab Emirates");
$domain3 = array(
    "domain" => "www.m1.com.sg",
    "country" => "Singapore");

array_push($return["domains"], $domain1);
array_push($return["domains"], $domain2);
array_push($return["domains"], $domain3);

echo json_encode($return, JSON_PRETTY_PRINT);