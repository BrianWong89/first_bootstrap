<?php
//Echo hint

//Creates a new DateTime object with current date time
$datetime=new DateTime();
//Sets time zone to Singapore
$datetime->setTimezone(new DateTimeZone('Asia/Singapore'));

//Creates a DateInterval object of 1 day
$dateInterval=new DateInterval('P1D');

//Remove 1 day from current datetime
//$datetime->add($dateInterval);

//Remove 1 day from current datetime
$datetime->sub($dateInterval);

//Echo datetime
echo $datetime->format('Y-m-d H:i:s');