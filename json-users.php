<?php
$members=array();
/* Declaration of members */
$member_1=array(
	"name"=>"Brian",
	"surname"=>"Wong",
	"age"=>28,
	"vaccination"=>false,
);
$member_2=array(
	"name"=>"Kenneth",
	"surname"=>"Lee",
	"age"=>29,	
	"vaccination"=>true,
);
$member_3=array(
	"name"=>"Sharon",
	"surname"=>"Wong",
	"age"=>30,	
	"vaccination"=>false,
);

/* End of declaration of members */
//Let's push all the member into $members array
array_push($members,$member_1);
array_push($members,$member_2);
array_push($members,$member_3);


//Json encode
//Try this 1, then comment it and try the next line. View the difference in "View Source"
//echo json_encode($members);
echo json_encode($members, JSON_PRETTY_PRINT);
