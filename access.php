<style type="text/css">
	#access-wrap{
		width: 300px;
		position: relative;
		margin: auto;
		clear: both;
		margin-top: 20px;
	}
	#access-wrap input[type='button']{
		float: left;
		clear: left;
		position: relative;
		width: 200px;
	}


</style>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#done').click(function(){
				var user = $('#user').val();
				var pass = $('#pass').val();
				var c_p = $('#c_p').val();				
				if(pass == c_p){
					$.post('access.php',{user: user,pass: pass},function(data){
					})
				}
			})
		})
	</script>


<div id = 'access-wrap'>
Change username and password
<?php

mysql_connect("localhost","root","")or die('Could not Connect to The Database !');
mysql_select_db("hotel");
$q = mysql_query("SELECT * FROM access");
$user = '';
$pass = '';
if(!empty($_POST['user']) && !empty($_POST['pass'])){
	mysql_query("DELETE FROM access");
	mysql_query("INSERT INTO access(username,password) VALUES('".$_POST['user']."','".$_POST['pass']."')");
}
while ($row = mysql_fetch_assoc($q)){
	$user = $row['username'];
	$pass = $row['password'];
}
;

echo "<input type = 'text' placeholder = 'username' id = 'user' value = '".$user."'/>
<input type = 'password' placeholder = 'password' id = 'pass' value = '".$pass."'/>
<input type = 'password' placeholder = 'confirm password' id = 'c_p'/>
<input type = 'button' id = 'done' value = 'done' />";


?>
</div>