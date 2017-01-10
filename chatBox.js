$(document).ready(function(){
				
				$('textarea').keypress(function(e){
				if(e.keyCode == 13){					
				insertMsg();
			
				
		//			var msg = $(this).val();
					$(this).val("");//'" width="'.$size.'" height="'.$size.'"
					
																				
				}	
			});
			
			$(".buttonSmile").click(function(){
				var smiley = $(this).attr("alt");
				var message = $('#ta').val();
				$("#ta").val(message + ' ' + smiley + ' ');
				
			});
			//show a box with smiles
			$("#smileBut").click(function(){
				$("#boxSmile").toggle();
			});
			
			// вывод сообщения из базы		
			setInterval(function(){
				console.log("logs working");
				

				$.ajax({
				cache : true,	
				url : "logs.php",
				type : "POST",
				success : function(msg){
				//	$('<div class="manMsg">'+msg+'</div>').appendTo('.msg_insert');	
					$('.msg_insert').html(msg);		
					
				}					
				})
				
			},1000);	
			
			setInterval( usersOnline(),2000);		
					
});		
	