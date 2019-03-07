<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lobster|Pacifico|Raleway|Source+Sans+Pro" rel="stylesheet">

<style type="text/css">
	#gal-wrapper{
		width: 1200px;
		height: auto;
		overflow: hidden;
		position: relative;
		margin: auto;
		margin-top: 110px;
		background-color: #fff;
		padding-bottom: 10px;
	}
	#img-holder{
		width: 15.5%;
		float: left;
		position: relative;
		height: 195px;
		overflow: hidden;
		margin-left: 1%;
		margin-top: 12px;
		display: block;
	
		padding-bottom: 2px;
	}
	#img-holder span{
		float: left;
		position: relative;
		font-weight: bolder;
		text-indent: 10px;
	}
	#img-holder img{
		width: 100%;
		height: 160px;
		position: relative;
		clear: both;
		margin-bottom: 10px;
		padding: 2px;
		border: 1px solid #dedede;
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
	#image-zoom{
		position: fixed;
		top: 80px;
		width: 1200px;
		height: 500px;
		z-index: 110;
		display: none;
		background-color: #fff;
	}
	#image-zoom-wrap{
		width: 800px;
		height: 100%;
		position: relative;
		float: left;
		clear: left;
		overflow: hidden;
		padding: 30px;

		background-color: #000;
	}
	#image-zoom-wrap img{
		
		position: relative;
		max-width: 100%;
		max-height: 100%;
		border: 1px solid #dedede;
		padding: 2px;
		display: block;
		margin: auto;
	}
	#image-zoom-descrip{
		float: left;
		position: relative;
		width: 400px;
		height: 100%;

		background-color: #fff;
	}
	#image-zoom-descrip h1,#image-zoom-descrip p{
		float: left;
		clear: both;
		position: relative;
		margin-top: 40px;
		width: 80%;
		text-align: left;
		margin-left: 40px;
	}
	#image-zoom-descrip h1{
		font-family: 'Pacifico', cursive;
	}
	#image-zoom-descrip p{
		margin-top: 10px;
	}
	#transer{
		position: fixed;
		width: 100%;
		height: 100%;
		z-index: 101;
		background-color: #000;
		opacity: 0.5;
		display: none;
		top: 0px;
	}
</style>

<div id = 'transer'></div>
<div id = 'gal-wrapper'>
<div id = 'image-zoom'>
<div id = 'image-zoom-wrap'>
<img src = '' />

</div>
<div id = 'image-zoom-descrip'>

</div>


</div>

<?php
mysql_connect("localhost",'root','')or die("could Not Connect to The database !");
mysql_select_db('hotel');
session_start();
$q = mysql_query("SELECT * FROM pictures WHERE category != 'slidey' AND category !='rooms' ORDER BY id DESC");
$count = 0;
while ($row = mysql_fetch_assoc($q)){

	echo "<div id = 'img-holder' class = 'imgholder'>
<a href = '#' id = 's".$row['id']."'><img src = 'images/".$row['name']."' /></a>
<span>".$row['title']."</span>
";
if(isset($_SESSION['type'])){
	echo "
	<div id = 'stash'>
<input type = 'text' placeholder = 'title' value = '".$row['title']."'/>
<textarea placeholder = 'description'>".$row['description']."</textarea>
<input type = 'button' value = 'Done' class = 'btn btn-info' id = '".$row['id']."'/>
<input type = 'button' value = 'Delete' class = 'btn btn-danger' id = 'd".$row['id']."'/>
</div>";
}
echo "</div>";
}
$count += 1;
?>

</div>
<div id = 'bigger'>
</div>
</div>
<?php
if(isset($_SESSION['type'])){
echo "
<style>
	#img-holder{
height: 400px;
}
</style>
<div id = 'image_adder'>
<form action='#' method='POST' enctype='multipart/form-data' id = 'frm'>
<input type='file' name='images[]' id = 'files' multiple />
<input type='submit' name='sub' id = 'submit' class='btn btn-info' />
</form>
</div>
";

}
?>

</div>

<script type="text/javascript">
	$(document).ready(function(){
		var wd = window.innerWidth;
			if(wd > 360){

			}
			else if(wd < 480){
				$('#head').css({
					
				})
				$('#gal-wrapper').css({
					width: wd+'px',
					'margin-top': '-100px',

				})
				$('.imgholder').css({
					width: '240px',
					left: '10px'

				})
				$('#image-zoom').css({
					width: wd+'px',
					overflow: 'auto',
					padding: '10px',
					top: '40px',
					height: 'auto',
					'max-height': '400px',
					overflow: 'auto'
				})
				$('#image-zoom-wrap').css({
					'max-width': '240px',
					'max-height': '300px',
					left: '10px',
					padding: '0px',
					'background-color': 'none'
				})
				$('#image-zoom-descrip').css({
					'max-width': '240px',
					'max-height': '300px',
					left: '10px',
					padding: '0px'
				})

				
			}

		$('#img-holder a').click(function(e){
			e.preventDefault();
			var x = this.getAttribute('id')
			var child = document.getElementById(x).children;
			child = child[0].getAttribute('src')
			$('#transer').fadeIn(300)
			$('#image-zoom').fadeIn(500)
			$('#image-zoom-wrap img').attr('src', child)
			var d = x.substring(1);
			$.post('image_dex.php',{id: d},function(data){
				$('#image-zoom-descrip').html(data)
			})


			
		})
		$('#transer').click(function(){
			$(this).fadeOut(300)
			$('#image-zoom').css({
				display: 'none'
			})

		})	


		var width = window.innerWidth;
		var el = document.createElement('img')

		$('#bigger').css({left:(width - 500) / 2 +'px'})
		$('#img-holder input[type="button"]').click(function(){
			var x = this.getAttribute('id')
			var sub = x.substring(0,1)
			if(sub == 'd'){
				sub = x.substring(1)
				$.post('image_adder.php',{del: 'yes',id: sub},function(data){
				$('#container').load('gallery.php')
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
				console.log(data)
				$('#container').load('gallery.php')
			})
			}


		})

		$('#frm').on('submit',function(e){
			e.preventDefault();
			var sample = 'stash'
			var x = new FormData(this)
			$.ajax({
				url: 'image_adder.php',
				method: 'POST',
				data: x,
				contentType: false,
				processData: false,
				success: function(data){
					$('#container').load('gallery.php')
				}
			})
			})
		})

</script>
