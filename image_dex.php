<?php
mysql_connect('localhost','root','')or die("could Not Connect to the database!");
mysql_select_db('hotel');
if(!empty($_POST['id'])){
	$q = mysql_query("SELECT * FROM pictures WHERE id = '".$_POST['id']."'");
	while ($row = mysql_fetch_assoc($q)) {
		echo "<h1>".$row['title']."</h1>
		<p><span>".$row['description']."</span></p>
		";
	}
}


?>