<style type="text/css">
	#rooms-wrapper{
		position: relative;
		clear: both;
		position: relative;
		width: 1200px;
		height: auto;
		overflow: hidden;
		padding: 10px;
		margin: auto;
		margin-top: 110px;
	}
	#r_sec{
		float: left;
		clear: left;
		position: relative;
		width: 100%;
		height: auto;
		overflow: hidden;
		background-color: #fff;
		margin: auto;
		padding: 20px;
		border: 1px solid #d6d6d6;
		margin-bottom: 20px;
		border-radius: 3px;
	}
	#r_sec img{
		float: left;
		clear: left;
		position: relative;
		display: block;
		margin-right: 10px;
		width: 380px;
		height: 300px;
	}
	#descrip1{
		float: left;
		position: relative;
		width: 400px;
		height: auto;
		overflow: hidden;
		padding: 20px;
		padding-top: 0px;

	}
	#descrip1 h1, #descrip1 p{
		position: relative;
		float: left;
		clear: both;
		width: 100%;
		height: auto;
		overflow: hidden;

	}
	#descrip1 p{
		line-height: 23px;
	}
	#list{
		float: left;
		position: relative;
		width: 320px;
		padding: 20px;
		padding-left: 30px;
		height: auto;overflow: hidden;
		border-left: 1px solid #d6d6d6;
	}
	#list ul{
		padding-left: 0px;
		position: relative;

	}
	#list ul li{
		
		position: relative;
		line-height: 22px;
	}
	#price{
		float: left;
		clear: left;
		position: relative;
		font-size: 22px;
		color: #CD6600;
	}
	#b_price{
		float: left;
		clear: left;
		position: relative;
		font-size: 22px;
		color: #8B1A1A;

	}
	
</style>

<div id = 'rooms-wrapper'>
<?php
mysql_connect("localhost",'root','')or die("could Not Connect to The database !");
mysql_select_db('hotel');
$q = mysql_query("SELECT * FROM pictures WHERE category = 'rooms'");
while ($row = mysql_fetch_assoc($q)){
	$q2 = mysql_query("SELECT * FROM rooms WHERE picture = '".$row['id']."'");
	$price1 = 0;
	$price2 = 0;
	$list = null;
	$appneder = '';
	while($fetch = mysql_fetch_assoc($q2)) {		
		if($fetch['list'] != null || $fetch['list'] != ''){
			$list = $fetch['list'];
		}
		if($fetch['o_price'] != null || $fetch['o_price'] != ''){
			$price1 = $fetch['o_price'];
		}
		if($fetch['c_price'] != null || $fetch['o_price'] != ''){
			$price2 = $fetch['c_price'];
		}
		$lister = [];
		$lister = explode('!@#', $list);

	}
	echo "
		<div id = 'r_sec' class = 'rsec'>
		<img src='images/".$row['name']."' />
		<div id = 'descrip1' class = 'descrip'>
		<h1>".$row['title']."</h1>
		<p><span>".$row['description']." </span></p>
		<div id = 'b_price'>
		<span><s>PHP ".$price1."</s></span>
		</div>
		<div id ='price'>
		<span>PHP ".$price2."</span>
		</div>

		</div>
		<div id = 'list'>
		<ul>
			";
			for($i = 0;$i < sizeof($lister);$i++){
	if($lister[$i] != null){

		echo "<li>".$lister[$i]."</li>";
	}

	}

			echo "
		</ul>
		</div>


</div>
	";
}


?>

<script type="text/javascript">
	$(document).ready(function(){
		var wd = window.innerWidth;
			if(wd > 360){

			}
			else if(wd < 480){
				$('.rsec').css({
					width: wd+'px',

				})
				$('.rsec img').css({
					'max-width': '230px',
					'max-height': '200px'
				})
				$('#rooms-wrapper').css({
					'margin-top': '-80px'
				})
				$('.descrip').css({
					width: '250px'
				})
			}
		
	})
</script>


</div>