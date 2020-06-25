<?php 
include_once('Conexion.php');
sleep(1);

	$Search = '';
	if (isset($_POST['Search'])) {
		$Search = strtolower($_POST['Search']);
	}

	$consulta = "SELECT Nombre FROM NombresP WHERE Nombre LIKE '%".$Search."%'  LIMIT 5";
	$resultado = $conn->query($consulta);
	$fila = mysqli_fetch_assoc($resultado);
?>

<?php if ($Search!='') { ?>

	<?php do { ?>
		 <div class="NombresP">
			 <?php echo $fila["Nombre"] ?> <br>
		</div>	
		
	<?php } while ($fila=mysqli_fetch_assoc($resultado)); ?>
<?php } 

elseif($Search=='') echo '<p>Ingresa una palabra clave</p>'; 
else echo '<p>No hay resultados...</p>'; 
?>
