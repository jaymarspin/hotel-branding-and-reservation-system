<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<script type="text/javascript" src = "js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">		
		$(document).ready(function(){
		$('#header').load('head.php',function(){
			<?php
			function main(){
				return "$('#container').load('main.php'".check_loader().");";
			}
			function admin(){
				return "
				,function(){
				$('#admin').load('admin.php',function(){
						$('#foot').load('footer.php')
					})
			}";
			}
			function check_loader(){
				return "
				,function(){
				$('#checker').load('checker-form.php'".admin().");
			}";
			}
			if(isset($_GET['page'])){
				$page = $_GET['page'];
				if($page == '2'){
					echo main();
					echo "

					$(document).ready(function(){
						setTimeout(function(){
						$('body').animate({
						scrollTop: $('#about-columbus').offset().top
					},1000);	
					},200)
						
					})
					
					";
				}
				else if($page == '3'){
					echo main();
				}
				else if($page == '4'){
					echo "$('#container').load('blogs.php',function(){
						$('#foot').load('footer.php'".admin().")
					})"; 
				}
				else if($page == '5'){
					echo "$('#container').load('rooms.php',function(){
						$('#foot').load('footer.php'".admin().")
					})"; 
				}
				else if($page == '6'){
					echo "$('#container').load('gallery.php',function(){
						$('#foot').load('footer.php'".admin().")
					})"; 
				}
				else if($page == 7){
					echo main();
					echo "$('#contacts').css({display: 'block'})";
				}
				else{
					echo main();
				}
			}
			else{
				echo main();
			}  
			?>
		})
		<?php
		session_start();
		if(isset($_SESSION['type'])){
			echo "
				$('#admin').css({display: 'block'})
			";
		}

		?>				
	})
	</script>	
	
</head>
<?php
	if(isset($_GET['message'])){
		$message = $_GET['message'];

		if($message == 1){
			echo "<script>
		alert('Not enough room left for your request')
		</script>";
		}
		else if($message == 2){
			echo "<script>
		alert('please enter date correctly')
		</script>";
		}
		else if($message == 3){
			echo "<script>
		alert('please enter all data needed')
		</script>";
		}
		else if($message == 4){
			echo "<script>
		alert('Your reservation has been successfully save, please wait for our text message or email for additional information, thank you')
		</script>";
		}
		else{

		}
		
	}


	?>
<style type="text/css">
	body{
		background-color:#F2F2F2;
		
	}
</style>
<body>
<div id = 'header'>
</div>	
<div id = 'checker'>
</div>
	<div id = 'container'>
	</div>
	
	<div id = 'admin'>
	</div>
	<div id = 'foot'>
	</div>
</body>

<script type="text/javascript" src = 'js/bootstrap.min.js'></script> 
</html>