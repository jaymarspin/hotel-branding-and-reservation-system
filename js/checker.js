$(document).ready(function(){
		function placeholder(string,select,stringplace){
			var x = $('#'+select).val()				
			if(x == string){
				$('#'+select).val(stringplace)
			}
		}
		function temp(x){
			var tmp = ''
			if(x == 'fname'){
				tmp = 'First Name'
			}
			else if(x == 'lname'){
				tmp = 'Last Name'
			}
			else if(x == 'mno'){
				tmp = 'Mobile No.'
			}
			else if(x == 'email'){
				tmp = 'Email'
			}
			return tmp
		}
		$("ul#input-wrapper li input[type='text']").click(function(){
			var x = this.getAttribute('id')
			 var val = $('#'+x).val()		 
			 placeholder(temp(x),x,null)
		})
		$("ul#input-wrapper li input[type='text']").blur(function(){
			var x = this.getAttribute('id')
			 var val = $('#'+x).val()	
			 placeholder('',x,temp(x))
		})	
	$('#check_now').click(function(e){
			var w = $(document).width();
			w = (w - 500) / 2 
			var wd = window.innerWidth;
			var h = 600
			if(wd < 480){
				h = 800
			}
			$('#checker').css({display: 'block'})
			$('#checker').animate({width: '500px',height: h+'px',left: w,top: '100px'},400,function(){
			}) 
			
			e.preventDefault();
		})
		$('#hider a').click(function(e){	
		e.preventDefault();		
			$('#checker').animate({width: '0px',height: '0px',left: '0px',top: '0px'},400,function(){
			})
		})
	

		
	});