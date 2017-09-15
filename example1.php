<?php
//Always declare an array as a variable
$return=array();

//It can be a single value
$return["status"]=true;

//It can be a float value too
$return["totalNetworth"]=5389835;

//It can also have arrays
$return["names"]=array("Jeremy","Brian","Kenneth");

//It can also have arrays of arrays
$return["robots"]=array(
	array(
		"id"=>1,
		"name"=>"Robot 1",		
	),
	array(
		"id"=>2,
		"name"=>"Robot 2",		
	),
	array(
		"id"=>3,
		"name"=>"Robot 3",		
	),
); 

echo json_encode($return,JSON_PRETTY_PRINT);