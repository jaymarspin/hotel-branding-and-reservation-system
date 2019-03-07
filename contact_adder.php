
<style type="text/css">
	ul#con_list{
		
		position: relative;
		height: auto;
		overflow: hidden;
		width: 60%;
		margin: auto;
		top: 30px;
		border: 1px solid #000;
		text-align: center;
	}

</style>

<script type="text/javascript" src = "js/jquery-3.1.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#adc_done').click(function(){
			var x = $('#adc').val();
		
			$.post('contact_adder.php',{cons: x},function(data){
				$('#reserv-list').load('contact_adder.php')
			})
		})
		$('.starcon input[type="button"]').click(function(){
			var y = this.getAttribute('id')
			y = y.substring(1)
			$.post('contact_adder.php',{del: y},function(data){
				$('#reserv-list').load('contact_adder.php')
			})	

		})
	})
</script>

<ul id = 'con_list'>
<span style="font-size: 20px;">Manage Contact Info's</span>
<?php
mysql_connect("localhost",'root','')or die("Could Not Connect To The database !");
mysql_select_db("hotel");
if(!empty($_POST['cons'])){
	
	mysql_query("INSERT INTO contacts(cons) VALUES('".$_POST['cons']."')");
}
if(!empty($_POST['del'])){
	mysql_query("DELETE FROM contacts WHERE id = '".$_POST['del']."'");
}
$q = mysql_query("SELECT * FROM contacts");
while ($row = mysql_fetch_assoc($q)) {
	echo"
	<div class = 'starcon'>
	<input type ='text' id = 'z1".$row['id']."' value = '".$row['cons']."'/>
	<input type = 'button' id = 'z".$row['id']."' value = 'delete' class = 'btn btn-danger'/>
	</div>
	";
}


?>
<input type="text" name="" id = 'adc' placeholder="Ex: Mobile: 09109280535"/>
<input type="button" name="" id = 'adc_done' value = 'add'  class="btn btn-info" /></ul>
