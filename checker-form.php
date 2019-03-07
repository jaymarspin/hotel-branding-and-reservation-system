
<link rel="stylesheet" type="text/css" href="css/checker.css" />
<script type="text/javascript">
	$(document).ready(function(){
		$.post('room_query.php',{},function(data){
			$('#room-available').html(data);
		})

	});
</script>
<style type="text/css">
	#hider{
		float: right;
		clear: right;
		position: relative;
		z-index: 9;
		right: 10px;
		line-height: 40px;
	}
	#checker{
		z-index: 12225;
	}
</style>
<script type="text/javascript" src = 'js/checker.js' /></script>
<script type="text/javascript">
	
</script>
<div id = 'check-head'>
<div id = 'hider'>
<a href = '#'>Hide</a>
</div>
<p>Columbus Plaza Hotel says</p>
</div>
<div id = 'trans'>
</div>
<ul id = 'room-available'>
	
	
	
</ul>
<ul id = 'input-wrapper'>
<form action="reservation_query.php" method="POST">
	<li><input type="text" placeholder="First name" value = 'First Name' id = 'fname' name="fname" /></li>
	<li><input type="text" placeholder="Last Name" value = 'Last Name' id = 'lname' name = "lname" /></li>

	<li><input type="text" name="mno" placeholder="Mobile No." value = 'Mobile No.' id = 'mno'></li>
	<li><input type="text" name="email" placeholder="Email" value = 'Email' id = 'email' /></li>
	<li><div id = 'text-aligner'>Room type</div><select name = 'type'>
	<?php
	mysql_connect("localhost","root","")or die("Could Not Connect to The Database !");
	mysql_select_db('hotel');
	$q = mysql_query("SELECT * FROM pictures WHERE category = 'rooms'");
	while ($row = mysql_fetch_assoc($q)){
		$q2 = mysql_query("SELECT * FROM room_available WHERE pictures = '".$row['id']."'");
		$row2 = mysql_fetch_assoc($q2);
		if($row2['number'] <= 0){

		}
		else{
		echo"
		<option style = 'color: #333'>".$row['title']."</option>
		";
		}
		

	}

	?>

	</select></li><br />
	<li><div id = 'text-aligner'>Check in:</div><input type="date" name="c_in" id = 'c_in' /></li>
	<li><div id = 'text-aligner'>Check out:</div><input type="date" name="c_out" id = 'c_out' /></li><br />
	<li><div id = 'text-aligner'>People:</div><input type="number" name="cpeople" id = 'cpeople' style="background: none;width: 70px;position: relative;top: 5px;border: 1px solid #fff;padding: 5px;"/>
	</select></li> 
	<li><span style="position: relative;top: 5px;">Rooms:</span><input type="number" name="cr_num" id ='cr_num' style="background: none;width: 70px;position: relative;top: 5px;border: 1px solid #fff;padding: 5px"></li>
	<li><div id = 'text-aligner'>Pick up?</div><select name="pick" id ='pick'><option>Yes Please! Pick me up on arrival</option>
	<option>No, I will make my own way there</option>
	</select></li> 
	<li><div id = 'text-aligner'>Time to pick up:</div><input type="time" name="time" id = 'email' /></li>
<input type="submit" name="" value="done" style="float: right;
clear: right;
position: relative;">
</form>
</ul>
