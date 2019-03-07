<style type="text/css">
	#admin{
		width: 100%;
		position: fixed;
		top: 500px;
		z-index: 999;
		height: 50px;	
		display: none;

		
	}
	#admin a{
		position: relative;
		border-radius: 5px;
		color: #f5f5f5;

	}
	#admin a nav{
		padding: 10px;
		position: relative;
		border: 1px solid #f5f5f5;
		float: left;
		margin-right: 10px;
		left: 50px;
		top: 5px;
		border-radius: 5px;
		z-index: 10;
	}
	#trans{
		width: 100%;
		height: 100%;
		position: absolute;
		background-color: #000;

	}
	#reserv-list{
		width: 0px;
		height: 0px;
		position: absolute;
		z-index: 115;
		background-color: #778899;
		overflow: auto;
		top: 0px;
	}
	#transier3{
		position: fixed;
		z-index: 112;
		width: 100%;
		height: 100%;
		top: 0px;
		left: 0px;
		opacity: 0.3;
		display: none;
		background-color: #000
	}
</style>
<div id = 'transier3'>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		var x = $(window).height()
		var y = $(document).width();
		
		$('#transier3').click(function(){
			
			$('#reserv-list, #transier3').fadeOut(500)
		})		
		$('#admin').css({top: x - 50+'px'})
		$('#reserv-list').css({width: '1000px',height: '490px',display: 'none'})
			var slice = $('#reserv-list').width()
			
			y = (y - slice) / 2	
		$('#admin a').click(function(e){
			var id = this.getAttribute('id')
			var tmp = x / 2
				
			$('#transier3, #reserv-list').fadeIn(500,function(){
				if(id == 'edit_rooms'){
					$('#reserv-list').load('room_form.php')
				}
				else if(id == 'reserv'){
					$('#reserv-list').load('reservation_list.php')
				}
				else if(id == 'add_promo'){
					$('#reserv-list').load('promo-form.php')
				}
				else if(id == 'access'){
					$('#reserv-list').load('access.php')
				}
				else if(id == 'logout'){
					window.location = 'logout.php'
				}
				else if(id == 'contact'){
					$('#reserv-list').load('contact_adder.php')
				}
				else{
					$('#reserv-list').load('slidey_form.php')
				}
				
			})	
			$('#reserv-list').css({top: '-'+(tmp + 170)+'px', left: y},300)
			e.preventDefault()
		})

	})
</script>
<div id = 'trans' style="opacity: 0.3">
</div>
<a href = '#' id = 'reserv'><nav>Reservations</nav></a>
<div id = 'reserv-list'>



</div>

<a href = '#' id = 'add_slidey'><nav>Slidey</nav></a>
<a href = '#' id = 'add_promo'><nav>Promo</nav></a>
<a href = '#' id = 'edit_rooms'><nav>Edit Rooms</nav></a>
<a href = '#' id = 'contact'><nav>Manage Contact info</nav></a>

<a href = '#' id = 'access'><nav>change username or password</nav></a>
<a href = '#' id = 'logout'><nav>logout</nav></a>
