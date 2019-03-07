$(document).ready(function(){
			var x = $(window).width()
			$('#slider-active').css({left: x-50*2, top: '80px'})
			$('#slider-active ul li img').click(function(){
				var id = this.getAttribute('id') 
			})
			var count = 0
			for(var i = 1;i < 5;i++){
					$('#m'+i).css({display: 'none'})
				}

			setInterval(function(){
				for(var i = 0;i < 5;i++){
					if(i == count){
						$('#m'+i).fadeIn(500)
					}
					else{
						$('#m'+i).fadeOut(900)
					
					}
				}
				count += 1 
				if(count >= 5){
					count = 0
				}
			
			},5000)

			})