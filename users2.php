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

//You can start writing your code below

echo "<table border='1'>\r\n";
echo "<tr>\r\n<th>Name</th><th>Surname</th><th>Age</th>\r\n</tr>\r\n";

foreach ($members as $member) {
	
	if ($member['vaccination'] == false) {
			echo "<tr>\r\n";
			echo "<td>".$member['name']."</td>\r\n";
			echo "<td>".$member['surname']."</td>\r\n";
			echo "<td>".$member['age']."</td>\r\n";
			echo "</tr>\r\n";
	}
}

echo "</table>\r\n";

?>