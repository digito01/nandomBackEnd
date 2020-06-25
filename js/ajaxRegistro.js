$(document).ready(function(){
	$("#Send").click(function(){

		var NameR_user=$("#NameR").val();
		var email_user=$("#email").val();
		var pass_user=$("#pass").val();

		$.post("php/Reg.php", {NameR:NameR_user, email:email_user, pass:pass_user}, function(datos){
			$("#result").html(datos);
		});
	});
});
