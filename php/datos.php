<?php 
$conex=mysqli_connect('localhost','root','','NombresBD');
$NombresRandom=$_POST['NombresRandom'];

	$sql="SELECT IdNombre, IdPais, Nombre 
		from NombresP where IdPais='$NombresRandom' ORDER BY RAND() LIMIT 1 ";

	$result=mysqli_query($conex,$sql);

	$TextoFinal=" <div id='listaPaises2' name='listaPaises'> ";



	while ($ver=mysqli_fetch_row($result)) {
		$TextoFinal=$TextoFinal.'<option value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';
	}

	echo  $TextoFinal."</div>";
	

?>
