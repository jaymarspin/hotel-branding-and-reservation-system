<style type="text/css">
	#foot{
		position: relative;
		height: 80px;
		width: 100%;
		background-color: #fff;
		margin-top: 100px;
	}
	#foot_contain{
		text-align: center;
		position: relative;
		top: 40px;
	}
	#foot_contain a{
		text-decoration: none;
		color: #333;
	}
	#log_in{
		position: fixed;
		height: 200px;
		width: 200px;
		background-color: #000;
		top: 300px;
		z-index: 999;
		left: 300px;
		padding: 30px;
		display: none;

	}
</style>
<script type="text/javascript">
	$(document).ready(function(){
		$('#secret_access').click(function(e){
			e.preventDefault();
			$('#log_in').css({display: 'block'})
		})
	})
</script>
<div id = 'log_in'>
<form action="admin_query.php" method="POST">
	
<input type="text" name="uname" />
<input type="password" name="pword" />
<input type="submit" name="submit" />

</form>
</div>
<div id = 'foot_contain'>
<a href = '#' id = 'secret_access'><span>copyright&copy2017</span></a>

</div>