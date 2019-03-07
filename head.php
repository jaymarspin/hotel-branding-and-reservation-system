

	<script type="text/javascript" src = "js/jquery-3.1.1.min.js"></script>
<style type="text/css">
	

		#logo-holder{
			width: 80px;
			height: 60px;
			border: 1px solid #000;
			margin: auto;
			background-color: #000;

		}
		#logo-holder img{
			width: 100%;
			height: 100%;
			position: relative;
			clear: both;
		}
		#menu{
			position: fixed;
			width: 90%;
			top: 45px;
			left: 5%;
			z-index: 99;
			height: 40px;
			margin-top: 50px;

		}
		#trans-back{
			width: 100%;
			height: 100%;
			position: absolute;
			opacity: 0.5;
		}
		.head ul#choices{
			width: 50%;
			position: relative;
			float: right;
			right: 20px;
			padding-left: 0px;
			background-size: contain;
			text-align: center;
			height: 40px;
			overflow: hidden;
			margin-top: 20px;


		}
		.head ul#choices a{
			color: #f5f5f5;
			font-weight: bolder;
		}
		.head ul#choices a li{
			background-size: cover;
			font-size: 16px;
			text-align: center;
			width: 120px;
			height: auto;
			overflow: hidden;
			line-height: 40px;
			display: inline-block;
			list-style-type: none;


		}
		.head ul#choices a li div#border{
			float: right;
			height: 7px;
			width: 7px;
			background-color: #636363;
			position: relative;
			top: 17px;
		}
		.head{
			clear: both;
			position: fixed;
			height: auto;
			width: 100%;
			height: 70px;
			left: 0px;
			z-index: 11;
			background-color: #363636;
		}
		.head img{
			float: left;
			clear: left;
			position: relative;
			width: 100px;
			height: 100px;
			left: 100px;
			top: 10px;
		}
		#menu ul#contact{
			float: left;
			position: relative;
			
			padding-left: 0px;
			line-height: 22px;
			font-size: 14px;
			list-style-type: none;
			display: none;
			

		}
		.head ul#icon{
			float: right;
			position: relative;
			margin-right: 40px;
			padding: 10px;
			clear: right;
		 	list-style-type: none;
		 	padding-left: 0px;
		 	top: 15px;
		 	color: #CFCFCF;


		}
		.head ul#icon li{
			display: inline-block;
			margin-right: 10px;
		}
		#head ul#choices a li:hover{

		}
		.bottom-border{			
			clear: both;
			position: relative;
			height: 3px;			
			top: -3px;
			width: 0;
			background-color: #009ACD;


		}
</style>
<script type="text/javascript">
	$(document).ready(function(){

		var wd = document.body.clientWidth;
		
			if(wd > 360){

			}
			else if(wd < 480){
				$('.head').css({
					height: '300px',
					position: 'relative',
					'margin-bottom': '10px'
				})
				$('ul#choices').css({
					margin: '0 auto',
					height: '300px'

				})
				$('#contacts').css({
					width: '100%',
					float: 'left',
					clear: 'left',
					left: '0px',
					top: '40px'
				})
				$('.head img').css({
					left: '10px',
					top: '110px'
				})
				$('ul#icon').css({
					right: '70px',
					'border-bottom': '1px solid #7F7F7F',
					'padding-left': '20px',
					position: 'absolute'
					
				})
			}


		$('#contacts a').click(function(e){
			e.preventDefault();
			$('#contacts').fadeOut(500)
		})

		$('.head ul#choices a li').mouseover(function(){
			var x = this.children;
			$(x[1]).animate({width: '100%'},200)
		})
		$('.head ul#choices a li').mouseout(function(){
			var x = this.children;
			$(x[1]).animate({width: '0'},200)
		})

		$(document).scroll(function(){
			
				var x = $(this).scrollTop()
			
			if(x >= 100){
				$('#menu').animate({'margin-top': '25px'},100)
			}
			if(x <= 20){
				$('#menu').animate({'margin-top': '50px'},100)
			}
	
			
		})
		$('#menu ul a').click(function(e){
			e.preventDefault();
			var x = this.getAttribute('id')
			var src = this.getAttribute('href')
			history.pushState({},"",src);
			if(x == 'hotel'){
				
			}
			else if(x == 'events'){
				return true
			}
			else if(x == 'articles'){
				$('#container').load('blogs.php')
			}
			else if(x == 'rooms'){

				$('#container').load('rooms.php')
			}
			else if(x == 'gallery'){

				$('#container').load('gallery.php')
			}
			else if(x == 'contact'){

				return false;
			}
			else{
				
				$('#container').load('main.php')
			
			}
			
		})
	})
</script>

<div class = 'head'>


	
		<div id = 'right-list'>
		
		</div>
		

	<img src = 'images/logo4.png' />
	
	<ul id ='icon'>
		<li><i class="fa fa-facebook fa-2x"></i></li>
		<li><i class="fa fa-twitter fa-2x"></i></li>
		<li><i class = 'fa fa-google-plus fa-2x'></i></li>
	</ul>
	<ul id = 'choices'>
		<a href = 'index.php?page=1' id = 'home'><li>Home<div id = 'border'></div><div id= 'menu1' class = 'bottom-border'></div></li></a>
		<a href = 'index.php?page=2' id = 'hotel'><li>Our Hotel<div id = 'border'></div><div id= 'menu2' class  = 'bottom-border'></div></li></a> 
		<a href = 'index.php?page=5' id = 'rooms'><li>Rooms<div id = 'border'></div><div id= 'menu3' class = 'bottom-border'></div></li></a>
		<a href = 'index.php?page=7' id = 'contact'><li>Contact Info<div id = 'border'></div><div id= 'menu3' class = 'bottom-border'></div></li></a>
		<a href = 'index.php?page=6' id = 'gallery'><li>Visual Gallery<div id = 'border' style="display: none;"></div><div id= 'menu4' class = 'bottom-border'></div></li></a> 
 
	</ul>
	</div>
	<div style="position: relative;height: 70px;width: 100%;clear: both;"></div>
	<div id = 'contacts'>
	<span id = 'contact-label'>
	Our Contact Info's

	</span>
	<ul>
		<?php
		mysql_connect("localhost",'root','')or die("Could Not Connect To The database !");
mysql_select_db("hotel");
		$q = mysql_query("SELECT * FROM contacts");
		while ($row = mysql_fetch_assoc($q)) {
			echo "<li>".$row['cons']."</li>";
		}

		?>


	</ul>


	<a href = '#'>Close</a>
	</div>
	<style type="text/css">
		#contact-label{
			font-size: 20px;
			position: relative;display: block;
			margin: auto;
			text-align: center;
			border-bottom: 1px solid #dedede;
			color: #1874CD

		}
		#contacts a{
			clear: both;
			position: absolute;
			width: 100%;
			height: 20px;
			float: left;
			top: 380px;
			text-align: center;
			background-color: #4D4D4D;
			color: #ccc;
		}
		#contacts ul{
			width: 96%;
			position: relative;
			display: block;
			margin: auto;
			padding-left: 0px;
			text-align: center;
			list-style-type: none;
			top: 20px;
		}
		#contacts ul li{
			margin-bottom: 10px;
		}
		#contacts{
			padding-top: 15px;
			position: fixed;
			top: 120px;
			width: 20%;
			left: 40%;
			display: none;
			height: 400px;
			background-color: #fff;
			z-index: 115;
			overflow: auto;
		}
	</style>