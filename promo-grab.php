<?php
if(!empty($_POST['promo'])){
	mysql_connect("localhost","root","")or die("Could Not Connect To The database !");
	mysql_select_db("hotel");

	$q = mysql_query("SELECT * FROM pictures WHERE id = '".$_POST['promo']."'");
	$row = mysql_fetch_assoc($q);
	echo "<div id = 'img-holder'>
		<img src='images/".$row['name']."'>
		</div>
		<div id = 'offers-about'>
		<h4>".$row['title']."</h4>
		<p>".$row['description']."</p>
		</div>";
}




?>