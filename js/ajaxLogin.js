	$(document).ready(function(){
		$('#login').click(function(){
			var NameR = $('#NameR').val();
			var pass = $('#pass').val();
			if ($.trim(NameR).length > 0 && $.trim(pass).length > 0 ) {
				$.ajax({
					url:"log.php",
					method:"post",
					data:{NameR:NameR,pass:pass},
					cache:"false",
					beforeSend:function(){
						$('#login').val("Conecting...");
					},
					success:function(data){
						$('#login').val("Login");
						if (data==1) {
							$(location).attr('href','index.php');
						}else{
							$("#result2").html("<div class='alert alert-dismisible alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Error! </strong>credentials are incorrect.</div> ");
						}
					}
				});
			};
		});
	});
	
