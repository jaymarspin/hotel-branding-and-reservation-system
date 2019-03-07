<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script type="text/javascript" src = "js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		var width = window.innerWidth;
		var el = document.createElement('img')

		$('#bigger').css({left:(width - 500) / 2 +'px'})
		$('#img-holder input[type="button"]').click(function(){
			var x = this.getAttribute('id')
			var sub = x.substring(0,1)
			if(sub == 'd'){
				sub = x.substring(1)
				$.post('image_adder.php',{del: 'yes',id: sub},function(data){
				$('#reserv-list').load('promo-form.php')
			})
			}else{
			var parent = document.getElementById(x).parentElement
			var stay = parent.getAttribute('id')
			var child = parent.children
			var ar = []
			for(var i = 0;i < child.length - 1;i++){
				ar[i] = child[i].value;
			}

			$.post('image_adder.php',{title: ar[0],description: ar[1],id: x},function(data){
				$('#reserv-list').load('promo-form.php')
			})
			}


		})

		$('#frm').on('submit',function(e){
			
			var sample = 'stash'
			var x = new FormData(this)
			$.ajax({
				url: 'image_adder.php',
				method: 'POST',
				data: x,
				contentType: false,
				processData: false,
				success: function(data){
					$('#reserv-list').load('promo-form.php')
				}
			})
			e.preventDefault();
			})
		})
			
			
			
		
	</script>
	<style type="text/css">
	#uploaded{
		width: 100%;
		height: auto;
		overflow: hidden;
		position: relative;
		margin: auto;
		margin-top: 110px;
	}
	.sec{
		float: left;
		clear: none;
		position: relative;
		width: 20%;
		background-color: #000;
	}
		#img-holder{
		width: 98%;
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
	#bigger{
		width: 500px;
		height: 500px;
		position: relative;
		z-index: 10;
		background-color: #ccc;
		display: none;
	}
	</style>
</head>
<body>
<div id = 'form'>
<div id = 'uploaded'>

<?php
mysql_connect("localhost",'root','')or die("could Not Connect to The database !");
mysql_select_db('hotel');
$q = mysql_query("SELECT * FROM pictures WHERE category = 'promo' ORDER BY id DESC");
while ($row = mysql_fetch_assoc($q)){
	echo "<div class='sec'>
	<div id = 'img-holder'>
<a href = '#' id = 's".$row['id']."'><img src = 'images/".$row['name']."' /></a>
<div id = 'stash'>
<input type = 'text' placeholder = 'title' value = '".$row['title']."'/>
<textarea placeholder = 'description'>".$row['description']."</textarea>
<input type = 'button' value = 'Done' class = 'btn btn-info' id = '".$row['id']."'/>
<input type = 'button' value = 'Delete' class = 'btn btn-danger' id = 'd".$row['id']."'/>
</div>
</div></div>";
}
?>

</div>
<form action="image_adder.php" method="POST" enctype="multipart/form-data" id = 'frm'>
<input type="file" name="images[]" id = 'files' multiple />
<input type="text" name="stash" value="promo" style="display: none;" />
<input type="submit" name="submit" id = 'submit' />
</form>
</div>
</body>
</html>