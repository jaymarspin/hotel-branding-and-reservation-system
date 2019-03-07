<style type="text/css">
	#uploaded_rooms{
		width: 90%;
		position: relative;
		height: auto;
		margin: auto;
		overflow: hidden;
	}
	form{
		width: 90%;
		position: relative;
		margin: auto;
		clear: both;
		
		align-content: center;
	}
	
	#adder{
		clear: both;
		position: relative;
		margin: auto;
		display: block;
		width: 100%;
		text-align: center;
	}
	#adder input[type='number']{
		width: 70%;
		position: relative;
		float: left;
	}
	#img-holder{
		width: 15.5%;
		float: left;
		position: relative;
		height: auto;
		overflow: hidden;
		margin-left: 1%;
		margin-top: 12px;
	}
	#img-holder img{
		width: 100%;
		height: 160px;
		position: relative;
		clear: both;
		margin-bottom: 10px;
	}
	#image_adder{
		clear: both;
		position: relative;
		background-color: #fff;
		margin: auto;
		margin-top: 20px;
		float: left;
		left: 100px;

	}
	#image_adder input[type='file'], #image_adder input[type='submit']{
		margin-bottom: 10px;
		position: relative;
		float: left;
		clear: both;
	}
	#stash{
	}
	#stash input[type='text'], #stash textarea{
		width: 100%;
		position: relative;
		margin-bottom: 10px;
	}
	#stash textarea{
		height: 70px;
	}



</style>

	<script type="text/javascript" src = "js/jquery-3.1.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		

		$('#img-holder input[type="button"]').click(function(){
			var x = this.getAttribute('id')
			var tmp = x
			var sub = x.substring(0,1)
			x = x.substring(1)
			var lenght = $('.lister'+x).lenght;
			var listval = '';
			if(sub == 'd'){
				sub = tmp.substring(1)
		
				$.post('image_adder.php',{del: 'yes',id: sub},function(data){
				$('#reserv-list').load('room_form.php')
				
			})
			}
			else if(sub == 'l'){
				
				var cons = $('#listnum'+x).val()
				var i = 0;
				for(;i < cons;i++){
					$('#list'+x).append('<input type = "text" class = "lister'+x+'"/>');

				}
				
			}

			else{
			var parent = document.getElementById(tmp).parentElement
			var stay = parent.getAttribute('id')
			var child = parent.children
			var ar = []
			
			x = tmp

			var lenght = $('.lister'+x).length;
				if(lenght == null){
					
				}
				else{
					
					for(var i = 0;i < lenght;i++){
						console.log('lister'+document.getElementsByClassName('lister'+x)[i].value)
						if(document.getElementsByClassName('lister'+x)[i].value.toString() != null || document.getElementsByClassName('lister'+x)[i].value.toString() != '') {							
						listval += document.getElementsByClassName('lister'+x)[i].value.toString() + '!@#';
						}
					}

				}
			for(var i = 0;i < child.length - 1;i++){
				ar[i] = child[i].value;
			}
			var op = document.getElementById('op'+tmp).value.toString()
			

			var cp = document.getElementById('cp'+tmp).value.toString()
			var r_left = document.getElementById('rm'+tmp).value.toString()

			$.post('image_adder.php',{title: ar[0],description: ar[1],op: op,cp: cp,list: listval,id: tmp,left: r_left},function(data){
				
				$('#reserv-list').load('room_form.php')
			})
			}


		})


		$('#frm').submit(function(e){
			var x  = new FormData(this)

			$.ajax({
				url: 'image_adder.php',
				method: 'POST',
				data: x,
				processData: false,
				contentType: false,
				success: function(data){
					$('#reserv-list').load('room_form.php')
				}

			});
			e.preventDefault();
		});	
	})
</script>
<div id = 'uploaded_rooms'>
	<?php
mysql_connect("localhost",'root','')or die("could Not Connect to The database !");
mysql_select_db('hotel');
$q = mysql_query("SELECT * FROM pictures WHERE category = 'rooms' ORDER BY id DESC");
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
		

	}
	$q3 = mysql_query("SELECT * FROM room_available WHERE pictures = '".$row['id']."'");
	$lefter = 0;
	while ($fetch2 = mysql_fetch_assoc($q3)) {
		$lefter = $fetch2['number'];
	}
	$lister = [];
	$lister = explode('!@#', $list);
	

	echo "<div class='sec'>
	<div id = 'img-holder'>
<a href = '#' id = 's".$row['id']."'><img src = 'images/".$row['name']."' /></a>
<div id = 'stash'>
<input type = 'text' placeholder = 'title' value = '".$row['title']."'/>
<textarea placeholder = 'description'>".$row['description']."</textarea>
<input type='number' name='list' id = 'op".$row['id']."' placeholder = 'Original price' value = '".$price1."'/>
<input type='number' name='list' id = 'cp".$row['id']."' placeholder = 'Current Price' value = '".$price2."'/>
<input type = 'number' name ='room_left' id = 'rm".$row['id']."' placeholder = 'Room left' value = '".$lefter."'/>
<div id = 'adder'><input type='number' name='list' id = 'listnum".$row['id']."'><input type='button' name='adder' id = 'l".$row['id']
."' value='go'></div>
<div id = 'list".$row['id']."'>
";
for($i = 0;$i < sizeof($lister);$i++){
	if($lister[$i] != null){

		echo "<input type = 'text' class = 'lister".$row['id']."' value = '".$lister[$i]."' />";
	}

	}

echo "
	</div>
<input type = 'button' value = 'Done' class = 'btn btn-info' id = '".$row['id']."'/>
<input type = 'button' value = 'Delete' class = 'btn btn-danger' id = 'd".$row['id']."'/>
</div>
</div></div>";
}
?>
</div>
<form action="image_adder.php" method="POST" enctype="multipart/form-data" id = 'frm' >
<input type="file" name="images[]" id = 'images' />	
	<input type="text" value="rooms" name="stash" style="display: none;" />
	<input type="submit" name="room_name" value = 'submit' />
	
</form>