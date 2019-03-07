<style type="text/css">
	ul#reserv-hold{
		width: 100%;
		margin-top: 20px;
		height: auto;
		overflow: hidden;
		position: relative;
		left: 0;
		text-align: center;
	}
	ul#reserv-hold li{

		display: inline-block;
		border: 1px solid #f5f5f5;
		font-weight: bolder;
		padding: 10px;
	}
</style>

<script type="text/javascript">
$(document).ready(function(){
	$('ul#reserv-hold li input[type="button"]').click(function(){
		var x = this.getAttribute('id')
		x = x.substring(1);
		$.post('reservation_list.php',{del: x},function(data){
			$('#reserv-list').load('reservation_list.php')
		})
	})
})
</script>
<?php
mysql_connect("localhost","root","")or die("Could Not Connect To The Database !");
mysql_select_db("hotel");

if(!empty($_POST['del'])){
	mysql_query("DELETE FROM reservation WHERE id = '".$_POST['del']."'");
}
echo "


<ul id = 'reserv-hold'>
";
$color = '';
$count = 0;
$q = mysql_query("SELECT * FROM reservation ORDER BY id DESC");
while ($row = mysql_fetch_assoc($q)) {
	$color = '#FF7F24';
	$count += 1;
	if($count >= 2){
		$color = '#53868B';
		$count = 0;

	}
	echo "
	<div style = 'float: left; clear: left;width: 100%;height: auto;overflow: hidden;
	width: 96%;display: block;margin-bottom: 10px;background-color: ".$color."; color: #fff'; padding: 30px;position: relative>
	<li>".$row['fname']."</li>
	<li>".$row['lname']."</li>
	<li>".$row['email']."</li>
	<li>".$row['number']."</li>
	<li>".$row['type']."</li>
	<li>".$row['fname']."</li>
	<li>".$row['pick']."</li>
	<li>".$row['time_pick']."</li>
	<li>".$row['guest']."</li>
	<li>".$row['romnum']."</li>
	<li>".$row['arrival']."</li>
	<li>".$row['departure']."</li>
	<li><input type = 'button' value = 'Delete' id = 'b".$row['id']."' class = 'btn btn-danger'/></li>
	</div>";
	
}


echo "</ul>";

?>