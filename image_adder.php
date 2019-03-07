<?php
if(!empty($_FILES['images']['name'][0])){
	$file = $_FILES['images'];
	$ext = array('jpg','png');
	foreach ($file['name'] as $key => $value) {
		$f_ext = strtolower(end(explode('.', $value)));
		if(in_array($f_ext, $ext)){
			if($file['size'][$key]){
				if($file['error'][$key] == 0){
					$newname = uniqid('',true).'.'.$f_ext;
					$destination = 'images/'.$newname;
					if(move_uploaded_file($file['tmp_name'][$key], $destination)){
						mysql_connect("localhost",'root','')or die("could Not Connect to The database !");
						mysql_select_db('hotel');
						$category = '';
						if(!empty($_POST['stash']) || !empty($_POST['stashy'])){
							$category = $_POST['stash'];
						}
						if(mysql_query("INSERT INTO pictures(name,category) VALUES('".$newname."','".$category."')")){

						}
						
					}
				}
				else{
					echo "unknow error encounterd";
				}
			}
			else{
				echo "file too large";
			}
		}
		else{
			echo "not a picture";
		}

	}

}

else if(!empty($_POST['title']) &&  !empty($_POST['id'])){
	mysql_connect("localhost",'root','')or die("could Not Connect to The database !");
	mysql_select_db('hotel');
	mysql_query("UPDATE pictures SET description = '".$_POST['description']."' WHERE id = '".$_POST['id']."'");
	mysql_query("UPDATE pictures SET title = '".$_POST['title']."' WHERE id = '".$_POST['id']."' ");

	echo $_POST['title']."<br />";
	echo $_POST['description']."<br />";
	echo $_POST['id']."<br />";
	
	
}

else if(!empty($_POST['del']) && !empty($_POST['id'])){
	mysql_connect("localhost",'root','')or die("could Not Connect to The database !");
	mysql_select_db('hotel');
	mysql_query("DELETE FROM pictures WHERE id = '".$_POST['id']."'");
	echo $_POST['id'];
}
else{ 
	echo "array is empty";
}
if(!empty($_POST['op']) && !empty($_POST['cp'])){
	mysql_connect("localhost",'root','')or die("could Not Connect to The database !");
	mysql_select_db('hotel');
		mysql_query("INSERT INTO rooms(o_price,c_price,picture) VALUES('".$_POST['op']."','".$_POST['cp']."','".$_POST['id']."')");
		echo "good";
}
if(!empty($_POST['list'])){
	mysql_connect("localhost",'root','')or die("could Not Connect to The database !");
	mysql_select_db('hotel');
	mysql_query("INSERT INTO rooms(list,picture) VALUES('".$_POST['list']."','".$_POST['id']."')");
	echo "good2";
}
if(!empty($_POST['left'])){
	mysql_connect("localhost",'root','')or die("could Not Connect to The database !");
	mysql_select_db('hotel');
	mysql_query("UPDATE room_available SET number = '".$_POST['left']."' WHERE pictures = '".$_POST['id']."'");
	echo "good2";
}


?>