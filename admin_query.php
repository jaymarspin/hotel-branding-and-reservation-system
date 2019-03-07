<?php
if(!empty($_POST['uname']) && !empty($_POST['pword'])){
	mysql_connect("localhost","root","")or die('could Not Connect To the database !');
mysql_select_db('hotel');
	$uname = $_POST['uname'];
	$pword = $_POST['pword'];
	$q = mysql_query("SELECT * FROM access WHERE username = '$uname' AND password = '$pword'");
	$num = mysql_num_rows($q);
	if($num >= 1){
		session_start();
		$_SESSION['type'] = 'admin';
		header("location: index.php");
	}
	else{
		header("location: index.php");
	}
		
	
	
}
else{
	header("location: index.php");
}




?>