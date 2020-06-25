	$(document).ready(function(){

		recargarLista();

		$('#listaPaises').change(function(){
			recargarLista();
		});
	})

	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"php/datos.php",
			data:"NombresRandom=" + $('#listaPaises').val(),
			success:function(r){
				$('#ResultadosPais').html(r);
			}
		});
	}