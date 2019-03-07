
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
<?php
mysql_connect("localhost","root","")or die('could Not Connect To the database !');
mysql_select_db('hotel');
$q = mysql_query("SELECT * FROM pictures WHERE category = 'rooms'");
while ($row = mysql_fetch_assoc($q)) {
	$title = $row['title'];
	$q2 = mysql_query("SELECT * FROM room_available WHERE pictures = '".$row['id']."'");
	$row2 = mysql_fetch_assoc($q2);
	$number = mysql_real_escape_string($row2['number']);
	if($number != 0 || $number > 0){		
	echo "<li><div id = 'room-wrapper'>".$title."</div><div id = 'transier-wrap'><div id = 'transier'></div><div id = 'tes'><i class='fa fa-check fa-3x'></i></div></div></li>";		
	}

}

?>