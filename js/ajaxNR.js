$(function(){
	$('#Search_form').focus();
	$('#Search_form').submit(function(e){
		e.preventDefault();
	})
	$('#Search').keyup(function(){
		var envio = $('#Search').val();

		$('#resultados').html('Cargando');

		$.ajax({
			type:'POST',
			url:'buscador.php',
			data: ('Search='+envio),
			success: function(resp){
				
					$('#resultados').html(resp)
				

			}
		})
	})
})