<style type="text/css">
	#checker ul#room-available{
		position: relative;
		color: #fff;
		padding-left: 0px;
		margin-top: 10px;
		width: 100%;
		clear: both;
		text-align: center;

	}
	#checker ul#room-available li{
		display: inline-block;
		position: relative;
		width: 100px;
		height: 100px;
		color: #fff;
		margin-right: 10px;
		overflow: hidden;
		 
	}
	#transier-wrap{
		clear: both;
		height: 50px;
		position: relative;
		height: 80px;
		width: 80px;
		left: 10px;
		line-height: 95px;
		border-radius:40px;
		overflow: hidden; 
		
	}
	#transier{
		width: 100%;
		height: 100%;
		opacity: 0.8;
		position: absolute;
		background-color: #CDBE70;
	}

	#tes{
		position: relative;
	}
	#check-head{
		clear: both;
		height: 40px;
		width: 100%;
		position: relative;
		background-color: #000;

		text-align: center;
	}
	#check-head p{
		margin: auto;
		position: relative;
		line-height: 40px;
		color: #f5f5f5;
		margin: auto;
	}
	#trans{
		background-color: #2B2B2B;
		position: absolute; 
		width: 100%;
		height: 100%;
		opacity: 0.5;

	}
	ul#input-wrapper{
		position: relative;
		width: 92%;
		margin: auto;
		height: auto;
		overflow: hidden;
		list-style-type: none;
		padding-left: 0px;
		padding-left: 47px;
	}
	ul#input-wrapper li{
		display: inline-block;
		margin-bottom: 7px;
		color: #f5f5f5;
	}
	ul#input-wrapper li input[type='time'], ul#input-wrapper select ,ul#input-wrapper li input[type='text'], ul#input-wrapper li input[type='date']{
		background: none;
		padding: 10px;
		color: #f5f5f5;
		font-style: italic;
		border: 1px solid #bababa;
	}
	#text-aligner{
		float: left;
		clear: left;
		position: relative;
		width: 80px;
		padding: 10px;
		padding-left: 0px;
	}
	select:hover{
		color: #000;
	}
	#checker a{
		position: relative;
		height: auto;
		overflow: hidden;
		width: 500px;
		text-align: center;
		text-decoration: underline;
		color: #CDBE70;
	}
	#done{
		width: 100%;
		position: relative;
		text-align: center;
		clear: both;
	}

</style>
<div id = 'check-head'>
<p>Columbus Plaza Hotel says</p>
</div>
<div id = 'trans'>
</div>
<ul id = 'room-available'>
	<li><div id = 'room-wrapper'>Single Room</div><div id = 'transier-wrap'><div id = 'transier'></div><div id = 'tes'><i class="fa fa-check fa-3x"></i></div></div></li>
	<li><div id = 'room-wrapper'>Single Room</div><div id = 'transier-wrap'><div id = 'transier'></div><div id = 'tes'><i class="fa fa-check fa-3x"></i></div></div></li>
	<li><div id = 'room-wrapper'>Single Room</div><div id = 'transier-wrap'><div id = 'transier'></div><div id = 'tes'><i class="fa fa-check fa-3x"></i></div></div></li>
	<li><div id = 'room-wrapper'>Single Room</div><div id = 'transier-wrap'><div id = 'transier'></div><div id = 'tes'><i class="fa fa-check fa-3x"></i></div></div></li>
	
	
</ul>
<ul id = 'input-wrapper'>
	<li><input type="text" name="" placeholder="First name" value = 'First Name' id = 'fname'></li>
	<li><input type="text" name="" placeholder="Last Name" value = 'Last Name' id = 'lname'></li>

	<li><input type="text" name="" placeholder="Mobile No." value = 'Mobile No.' id = 'mno'></li>
	<li><input type="text" name="" placeholder="Email" value = 'Email' id = 'email'mno''></li>
	<li><div id = 'text-aligner'>Check in:</div><input type="date" name="" id = 'checkin' /></li>
	<li><div id = 'text-aligner'>Check out:</div><input type="date" name="" id = 'checkout' /></li><br />
	<li><div id = 'text-aligner'>People:</div><input type="number" name="" id = 'people' /> 
	<li>Rooms:<input type="number" name="" id = 'r_num'></li> 
	<li><div id = 'text-aligner'>Pick up?</div><select><option>Yes, That will be great</option>
	<option>No, I will make my own way there</option>
	</select></li> 
	<li><div id = 'text-aligner'>Time to pick up:</div><input type="time" name="" id = 'email' /></li>

</ul>
<div id = 'done'><a href = '#'>Make a reservation</a></div>